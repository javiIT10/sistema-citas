/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./vistas/*/**/*.{html,js,php}",
    "./vistas/assets/*/**/*.{html,js}",
  ],
  theme: {
    extend: {
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      screens: {
        "sm-mobil": "320px",
        "md-mobil": "385px",
        mobile: "576px",
        tablet: "768px",
        desktop: "968px",
      },
      colors: {
        /* ##Normal */
        "first-color": "hsl(187, 98%, 32%)",
        "first-color-alt": "hsl(187, 98%, 28%)",
        "first-color-light": "hsl(187, 98%, 66%)",
        "first-color-lighten": "hsl(187, 98%, 92%)",
        "title-color": "hsl(187, 4%, 15%)",
        "text-color": "hsl(187, 4%, 35%)",
        "text-color-light": "hsl(187, 4%, 55%)",
        "body-color": "hsl(187, 0%, 100%)",
        "container-color": "#FFF",

        /* ##DarkMode */
        "first-color-dark": "hsl(187, 8%, 20%)",
        "title-color-dark": "hsl(187, 4%, 95%)",
        "text-color-dark": "hsl(187, 4%, 75%)",
        "body-color-dark": "hsl(187, 8%, 12%)",
        "container-color-dark": "hsl(187, 8%, 16%)",
      },
      boxShadow: {
        "3xl": "-2px 0px 4px hsla(187, 98%, 15%, .1)",
        "4xl": "0px 1px 4px hsla(152, 4%, 15%, 0.1)",
        "input-valid": "0 5px 10px hsla(200, 70%, 56%, .3)",
        "input-error": "0 5px 10px hsla(353, 64%, 53%, 0.3)",
      },
    },
  },
  plugins: [require("@tailwindcss/forms")],
};
