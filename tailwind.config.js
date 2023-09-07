/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./public/**/*.{html,js,php}', './app/**/*.{html,js,php}'],
  theme: {
    container: {
      center: true,
      padding: '30px',
    },
    extend: {
      colors:{
        primary: '#C026D3',
        secondary:'#64748b',
        dark: '#0f172a'
      },
      screens:{
        '2xl':'1320px'
      },
    },
  },
  plugins: [],
}

