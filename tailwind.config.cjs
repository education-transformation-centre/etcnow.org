/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}"],
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
                    '50': '#f6f4f0',
                    '100': '#e9e2d8',
                    '200': '#d4c7b4',
                    '300': '#bba489',
                    '400': '#a78868',
                    '500': '#997659',
                    '600': '#83604b',
                    '700': '#6c4d40',
                    '800': '#5a4039',
                    '900': '#4f3934',
                    '950': '#2c1e1c',
                },
                green: {
                    DEFAULT: "#4d9b4d",
                    '50': '#f4faf3',
                    '100': '#e4f4e4',
                    '200': '#cbe7cb',
                    '300': '#a1d4a1',
                    '400': '#72b771',
                    '500': '#4d9b4d',
                    '600': '#3b7e3b',
                    '700': '#316431',
                    '800': '#2b502b',
                    '900': '#244325',
                    '950': '#102311',
                },
            },
        },
    },
    plugins: [require("@tailwindcss/forms")],
};
