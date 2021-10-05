module.exports = {
  purge: [
    './app/Views/*.php',
    './app/Views/**/*.php',
    './app/Views/**/**/*.php',
    './app/Views/**/**/**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors:{
        google: '#1A73E8',
        new: '#eaeaea',
      },
      height:{
        new: '150vh',
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
