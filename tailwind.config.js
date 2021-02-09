
const colors = require('tailwindcss/colors')


module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        'light-blue': colors.lightBlue,
        cyan: colors.cyan,
        pink: {
          banner: '#E269F0',}

      },
      fontFamily: {
        body: ['Inter'],

      },
    },

  },
  variants: {
    extend: {

      borderRadius: ['hover', 'focus'],

    },
  },
  plugins: [
    // ...
    require('@tailwindcss/forms'),
  ],

}