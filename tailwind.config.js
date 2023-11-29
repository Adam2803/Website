/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/tw-elements/dist/js/**/*.js",
    ],
    theme: {
        fontWeight: {
            hairline: "10",
            biss: "650",
        },
        fontSize: {
            xs: ["12px", "16px"],
            sm: ["14px", "20px"],
            base: ["16px", "19.5px"],
            lg: ["18px", "21.94px"],
            xl: ["20px", "24.38px"],
            "2xl": ["24px", "29.26px"],
            "3xl": ["28px", "50px"],
            "4xl": ["48px", "58px"],
            "8xl": ["96px", "106px"],
            "5xl": "4.692rem",
        },
        extend: {
            animation: {
                slide: "slide 6s linear infinite",
            },
            keyframes: {
                slide: {
                    "0%": { transform: "translateY(100%)", opacity: 0.1 },
                    "15%": { transform: "translateY(0)", opacity: 1 },
                    "30%": { transform: "translateY(0)", opacity: 1 },
                    "45%": { transform: "translateY(-100%)", opacity: 1 },
                    "100%": { transform: "translateY(-100%)", opacity: 0.1 },
                },
            },
            fontFamily: {
                palanquin: ["Palanquin", "sans-serif"],
                montserrat: ["Montserrat", "sans-serif"],
            },
            colors: {
                primary: "#ECEEFF",
                "coral-red": "#FF6452",
                "slate-gray": "#6D6D6D",
                "pale-blue": "#F5F6FF",
                "white-400": "rgba(255, 255, 255, 0.80)",
            },
            boxShadow: {
                "3xl": "0 10px 40px rgba(0, 0, 0, 0.1)",
            },
            backgroundImage: {
                hero: "url('/build/assets/images/collection-background.svg')",
                card: "url('/build/assets/images/thumbnail-background.svg')",
            },
            screens: {
                wide: "1440px",
            },
        },
    },
    plugins: [require("tw-elements/dist/plugin.cjs")],
};
