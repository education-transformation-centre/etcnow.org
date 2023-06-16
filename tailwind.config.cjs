/** @type {import('tailwindcss').Config} */
module.exports = {
	content: ['./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}'],
	theme: {
		extend: {
			fontFamily: {
				sans: ["Arial", "Helvetica", "sans-serif"],
			},
			fontSize: {
				lg: "1.25rem",
				xl: "1.563rem",
				"2xl": "1.953rem",
				"3xl": "2.441rem",
				"4xl": "3.052rem",
				"5xl": "3.815rem",
			},
			colors: {
				brown: {
					dark: "#6c4d40",
				},
				green: {
					DEFAULT: "#4d9b4d",
				},
			},
		},
	},
	plugins: [
		require('@tailwindcss/forms')
	],
}
