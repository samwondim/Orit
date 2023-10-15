/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php, html, js}","./template-parts/*.{php, html, js}"],
  theme: {
    fontFamily: {
      'mont': ['Montserrat', 'sans-serif']
    },
    extend: {
      backgroundImage: theme => ({
        'contact-us': "url('./assets/contact_us.png')"
      })
    }
  },
  plugins: [require("daisyui")],
}


