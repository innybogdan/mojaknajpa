/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["index.html", "menu.html", "reserve.html", "contact.html"],
  theme: {
    screens: {
      'small': '480px',
      // => @media (min-width: 480px) { ... }
      'tablet': '768px',
      // => @media (min-width: 768px) { ... }

      'laptop': '1024px',
      // => @media (min-width: 1024px) { ... }

      'desktop': '1360px',
      // => @media (min-width: 1360px) { ... }
    },
    extend: {

    },
  },
  plugins: [],
}

