/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./**/*.{html,js}"
  ],
  theme: {
    extend: {
      // Custome code
      fontFamily: {
        'basefont': ["Montserrat", 'sans-serif'],
        'secondaryfont': ["Poppins", 'sans-serif'],
      },
      colors:{
        'theme-primary'  : '#070824',
        'theme-secondary': '#93F2FF',
        'theme-dark'     : '#070721',
        'theme-gray'     : '#D7D9FF',
        'theme-purple'   : '#4D4DFF',
        'theme-black'    : '#10102B'
      },
      screens: {
        'sm': '767px'
      }
    },
  },
  plugins: [],
}