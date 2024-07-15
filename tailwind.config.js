/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                poppins: ['Poppins', 'sans-serif'],
                jakartaSans: ['Plus Jakarta Sans', 'sans-serif'],
            }
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
        // require('daisyui'),
    ],
}

