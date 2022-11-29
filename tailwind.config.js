/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'primary':'#1E2541',
      'secondary' : '#F3F3F3',
      'componen': '#F0719C',
      'sidebar' : '#F0719C',
      'warna-2':'#354374',
      'warna-3':'#FFA46B',
    },
    fontFamily: {
      body: ['Montserrat']
    },
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
}
