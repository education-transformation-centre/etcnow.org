// @ts-check
import { defineConfig } from "astro/config";
import tailwindcss from "@tailwindcss/vite";
import node from "@astrojs/node";

// https://astro.build/config
export default defineConfig({
	site: "https://etcnow.org",

	security: {
		// Railway terminates TLS at its proxy and forwards plain HTTP, so Astro only sees
		// `http://…` unless it is told to trust `X-Forwarded-Proto`/`-Host`. Without this the
		// CSRF origin check compares the browser's `https://` Origin against `http://` and
		// rejects every contact-form POST with a 403.
		allowedDomains: [
			{ protocol: "https", hostname: "etcnow.org" },
			{ protocol: "https", hostname: "www.etcnow.org" },
			{ protocol: "https", hostname: "**.up.railway.app" },
		],
	},

	server: {
		port: 4321,
		host: true,
	},

	vite: {
		plugins: [tailwindcss()],
	},

	adapter: node({
		mode: "standalone",
	}),
});
