/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.{js,php,vue}",
        "./resources/**/*.blade.php",
        "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {},
    },
    plugins: [
        require('flowbite/plugin')
    ],
    darkMode: 'class',
}
