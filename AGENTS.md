# AGENTS.md

> `CLAUDE.md` is a symlink to this file — edit `AGENTS.md`.

## Project

`etcnow-org` — the Education Transformation Centre website (etcnow.org), rebuilt from the old WordPress/Breakdance site. Same stack as puremintbooks.com: Astro 7, Tailwind CSS 4 (Vite plugin), the Node adapter in `standalone` mode, deployed to Railway. Requires Node >= 22.23.4.

## Commands

- `npm run dev` — dev server on `localhost:4321`
- `npm run build` — build to `./dist/`
- `npm start` — run the built server (`dist/server/entry.mjs`), as Railway does

If the host's Node is too old, run them in a container:
`docker run --rm -u $(id -u):$(id -g) -e HOME=/tmp -v "$PWD":/app -w /app node:22-alpine sh -c 'npm ci && npm run build'`

## Layout

- Pages: `/`, `/testimonies`, `/testimony/<slug>` (slugs kept from WordPress so old links work), `/contact`, 404.
- Content lives in `src/data/`: `site.ts` (contact details, nav, Fathom ID, Counseling Application link) and `testimonies.ts`. Add a testimony by adding an entry there; it appears on `/testimonies` and gets its own page.
- Images live in `src/assets/` and go through `astro:assets` for resizing.
- Every page is prerendered except `/contact`, which sets `prerender = false` because Astro form actions need an on-demand page.

## Contact form

`src/actions/index.ts` holds the `contact` action. It validates with Zod, drops honeypot (`bot-field`) submissions silently, and emails the message through Resend's HTTP API. It needs `RESEND_API_KEY`, `CONTACT_TO` and `CONTACT_FROM` (see `.env.example`); any one missing fails closed with an error that asks the visitor to email instead. Astro inlines these at build time, so changing one needs a redeploy.

## Deployment (Railway)

`railway.toml` builds with `npm run build`, starts with `npm start`, and health-checks `/`. `security.allowedDomains` in `astro.config.mjs` lists the production and `*.up.railway.app` origins so the CSRF check accepts form POSTs behind Railway's TLS proxy; add any new domain there. Locally, a POST to `localhost` is rejected with a 403 by that same check unless sent with production-style `Host`/`X-Forwarded-*` headers.
