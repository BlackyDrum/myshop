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
                '192': '48rem',
                '224': '56rem',
                '256': '64rem'
            }
        },
    },
    plugins: [],
}
