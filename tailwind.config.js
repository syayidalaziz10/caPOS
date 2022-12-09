/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    colors: {
      'primary':'#1E2541 !important',
      'secondary' : '#F3F3F3 !important',
      'componen': '#F0719C !important',
      'sidebar' : '#F0719C !important',
      'warna-2':'#354374 !important',
      'warna-3':'#FFA46B !important',
      'warna-4':'#29345B !important',
    },
    fontFamily: {
      body: ['Montserrat']
    },
  },
  plugins: [
    require('tailwind-scrollbar-hide')
  ],
}
