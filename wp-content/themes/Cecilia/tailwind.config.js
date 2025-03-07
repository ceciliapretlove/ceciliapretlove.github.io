/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./**/*.php'],
  theme: {
    extend: {
      fontFamily: {
        'Fira': [ "Fira Code", 'Helvetica', 'Verdana', 'Tahoma', 'sans-serif' ],
        'Inter': [ "Inter 18pt", 'Helvetica', 'Verdana', 'Tahoma', 'sans-serif' ],
     },
    },
  },
  plugins: [],
}

// tailwind.config.js

// /** @type {import('tailwindcss').Config} */
// module.exports = {
//   content: ["./header.php"],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }