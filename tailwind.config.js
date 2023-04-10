/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'background' : '#f8f9fd',
        'primary' : '#2532d3',
        'primary-light' : '#5e52fa'
      }
    },
  },
  plugins: [],
}

