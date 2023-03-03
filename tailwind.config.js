/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/welcome.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
      },
      colors: {
        primary: '#1f4394', // Replace with your desired color code
      },
    },
  },
  plugins: [require("daisyui")],
}
