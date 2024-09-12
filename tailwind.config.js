// module.exports = {
//     content: [
//       './resources/views/**/*.blade.php', // For Laravel Blade files
//       './resources/js/**/*.js',           // For JavaScript files
//       './resources/css/**/*.css',         // If you use any CSS files
//       './src/**/*.{html,js}',             // Example for other HTML/JS files
//     ],
//     theme: {
//       extend: {},
//     },
//     plugins: [],
//   }
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            
        },
    },

    plugins: [require('@tailwindcss/forms')],
};

  