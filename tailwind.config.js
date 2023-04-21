/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.vue",
    // "./node_modules/flowbite/**/*.js"
    
  ],
  theme: {
    extend: {
      colors: {
        'lemon' : '#CAE00D',
        'lemon-20' : 'rgba(202, 224, 13, 0.2);',
        'lemon-40' : 'rgba(202, 224, 13, 0.4);',
        'lemon-60' : 'rgba(202, 224, 13, 0.6);',
        'lemon-80' : 'rgba(202, 224, 13, 0.8);',


        'green' : '#00FF92',
        'green-20' : 'rgba(0, 255, 146, 0.2)',
        'green-40' : 'rgba(0, 255, 146, 0.4)',
        'green-60' : 'rgba(0, 255, 146, 0.6)',
        'green-80' : 'rgba(0, 255, 146, 0.8)',
      }
    },
  },
  plugins: [require("daisyui"),
                    ('tailwind-scrollbar'),
                    ('tailwindcss-scrollbar'),
                    // ('flowbite/plugin')
],
  
  
  daisyui: {
      themes: [],
  },
  flowbite: {
    themes: [],
},
  
};