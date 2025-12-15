/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./inc/**/*.php",
    "./template-parts/**/*.php",
    "./js/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        manrope: ['Manrope', 'sans-serif'],
      },
      colors: {
        'brand-red': '#D32F2F',
        'brand-red-hover': '#B71C1C',
      }
    },
  },
  plugins: [],
}
