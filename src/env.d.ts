interface ImportMetaEnv {
	/** Resend API key for contact-form delivery. Server-side only. */
	readonly RESEND_API_KEY: string | undefined;
	/** Inbox that receives contact-form messages. Server-side only. */
	readonly CONTACT_TO: string | undefined;
	/** Sender address for contact-form messages; its domain must be verified in Resend. */
	readonly CONTACT_FROM: string | undefined;
}

interface ImportMeta {
	readonly env: ImportMetaEnv;
}
