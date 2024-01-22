/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,php}"],
  theme: {
    extend: {
      colors: {
        accent: "#005175",
      },
    },
  },
  plugins: [require("@tailwindcss/forms"), require("@tailwindcss/typography")],
};
