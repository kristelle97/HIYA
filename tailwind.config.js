module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                yellow: {
                    intami: '#F4B03F'
                },
                blue: {
                    intami: '#090043'
                },
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
