const colors = require('tailwindcss/colors')

module.exports = {
    purge: [

        './resources/**/*.blade.php',

        './resources/**/*.js',

        './resources/**/*.vue',

    ],
    content: [],
    theme: {
        extend: {
            colors:{
                indigo: {
                    500: '#B67DFF',
                    700: '#2e3680',
                }
            },
            fontFamily: {
                sans: ["ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "Segoe UI", "Roboto", "Helvetica Neue", "Arial", "Noto Sans", "sans-serif", "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"],
                serif: ["PlayfairDisplay","Century Book", "ui-serif", "Georgia", "Cambria", "Times New Roman", "Times", "serif"],
                mono: ['LibreFranklin','Menlo', 'Monaco', 'Consolas', '"Liberation Mono"', '"Courier New"', 'monospace'],
            },
        },
    },
    plugins: [],
}
