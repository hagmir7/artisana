/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    light: '#D48A8A',
                    DEFAULT: '#C96868',
                    dark: '#B34646',
                },
                secondary: {
                    light: '#FCE9BD',
                    DEFAULT: '#FADFA1',
                    dark: '#F8D585',
                },
                info: {
                    light: '#9EBEC5',
                    DEFAULT: '#7EACB5',
                    dark: '#5E9AA6',
                },
                light: {
                    lighter: '#FFF9F5',
                    DEFAULT: '#FFF4EA',
                    darker: '#FFE8D1',
                },
                accent: '#FF9F1C',
                success: '#2EC4B6',
                warning: '#FF6B6B',
                error: '#D62246',
            },
        },
    },
    plugins: [
        function ({ addUtilities, addComponents, e, config }) {
            const newUtilities = {
                '.bg-shimmer': {
                    position: 'relative',
                    overflow: 'hidden',
                    '&::after': {
                        content: '""',
                        position: 'absolute',
                        top: '0',
                        left: '0',
                        // width: '100%', circle, height: '100%',
                        background: 'linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent)',
                        animation: 'shimmer 1.5s infinite',
                    },
                },
            }
            addUtilities(newUtilities, ['responsive', 'hover'])
        },
    ],
}

