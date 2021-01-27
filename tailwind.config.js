module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            colors: {
                brick: {
                    light: '#BE5C60',
                    DEFAULT: '#6F212F',
                }
            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
