module.exports = {
  purge: [
    './app/Views/*.php',
    './app/Views/**/*.php',
    './app/Views/**/**/*.php',
    './app/Views/**/**/**/*.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
