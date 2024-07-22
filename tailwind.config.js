const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                jakartaSans: ['Plus Jakarta Sans', 'sans-serif'],
            },
            colors: {
                philippineYellow: '#FFC700',
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
    ],
};
