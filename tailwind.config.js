/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: 'jit',
  purge: [
    './src/ts/**/*.{js,ts,jsx,tsx}',
    './app/**/*.php',
    './view/**/*.php',
    './template/**/*.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}
