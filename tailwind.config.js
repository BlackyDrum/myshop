/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            scale: {
                '200': '2',
                '250': '2.50',
            },
            height: {
                '128': '32rem',
            }
        },
    },
    plugins: [],
}
