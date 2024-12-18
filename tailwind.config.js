/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js}",
    "./frontend/**/*.{html,js,php}"  ], 
  theme: {
    extend: {
      colors: {
        'dark-blue': '#00121D',
        'medium-blue': '#0A2735',
        'emerald-green': '#5F817D',
        'bright-orange' : '#EF9876',
        'pure-orange': '#FF955A',
        'black-blue' : '#1B262A',
        'white': '#ECECEC',
      },
      fontFamily: {
        roboto: ['Roboto', 'ui-sans-serif', 'system-ui'], // Ajoutez ici
      },
      keyframes: {
        animStar: {
          from: { transform: "translateY(0px)" },
          to: { transform: "translateY(-2000px)" },
        },
      },
    },
  },
  plugins: [],
};

