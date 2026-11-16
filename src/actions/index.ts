import { ActionError, defineAction } from "astro:actions";
import { z } from "astro/zod";

import { site } from "../data/site";

/**
 * The /contact form posts here, and this emails the message to CONTACT_TO
 * through Resend's HTTP API. The API key never leaves the server: the browser
 * posts same-origin to the action, and only the action talks to Resend.
 */

const DELIVERY_FAILED = `Sorry — something went wrong on our end and your message wasn't sent. Please try again, or email ${site.email}.`;

const contactSchema = z.object({
	name: z
		.string({ error: "Please enter your name." })
		.min(1, "Please enter your name.")
		.max(255, "Please keep your name to 255 characters or fewer."),
	email: z
		.email({ error: "Please enter a valid email address." })
		.max(255, "Please keep your email address to 255 characters or fewer."),
	message: z
		.string({ error: "Please enter a message." })
		.min(1, "Please enter a message.")
		.max(10000, "Please keep your message to 10,000 characters or fewer."),
});

export type ContactValues = { name: string; email: string; message: string };

export type ContactResult =
	| { ok: true }
	| { ok: false; errors: Record<string, string[]>; values: ContactValues };

/** Trimmed string for `key`, or `""` when the field was absent or a file upload. */
function field(formData: FormData, key: string): string {
	const value = formData.get(key);
	return typeof value === "string" ? value.trim() : "";
}

export const server = {
	contact: defineAction({
		accept: "form",
		// No input schema: the handler takes the raw FormData so that a failed
		// submission can hand the visitor's answers back to the page to re-render.
		handler: async (formData: FormData): Promise<ContactResult> => {
			// The honeypot. A human never sees this input, so anything in it is a bot.
			// Answer exactly as for a genuine message so the bot learns nothing.
			if (field(formData, "bot-field") !== "") {
				return { ok: true };
			}

			const values: ContactValues = {
				name: field(formData, "name"),
				email: field(formData, "email"),
				message: field(formData, "message"),
			};

			const parsed = contactSchema.safeParse(values);
			if (!parsed.success) {
				return { ok: false, errors: z.flattenError(parsed.error).fieldErrors as Record<string, string[]>, values };
			}

			const apiKey = import.meta.env.RESEND_API_KEY;
			const to = import.meta.env.CONTACT_TO;
			const from = import.meta.env.CONTACT_FROM;
			if (!apiKey || !to || !from) {
				console.error("[contact] RESEND_API_KEY, CONTACT_TO or CONTACT_FROM is not set; message not sent.");
				throw new ActionError({ code: "INTERNAL_SERVER_ERROR", message: DELIVERY_FAILED });
			}

			const { name, email, message } = parsed.data;
			let response: Response;
			try {
				response = await fetch("https://api.resend.com/emails", {
					method: "POST",
					headers: { Authorization: `Bearer ${apiKey}`, "Content-Type": "application/json" },
					body: JSON.stringify({
						from,
						to: [to],
						reply_to: email,
						subject: `Website message from ${name}`,
						text: `Name: ${name}\nEmail: ${email}\n\n${message}`,
					}),
					signal: AbortSignal.timeout(10_000),
				});
			} catch (error) {
				console.error("[contact] Could not reach Resend:", error);
				throw new ActionError({ code: "INTERNAL_SERVER_ERROR", message: DELIVERY_FAILED });
			}

			if (!response.ok) {
				console.error(`[contact] Resend answered ${response.status}:`, await response.text());
				throw new ActionError({ code: "INTERNAL_SERVER_ERROR", message: DELIVERY_FAILED });
			}

			return { ok: true };
		},
	}),
};
