module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'black': '#000000',
            'white': '#ffffff',
            'red': '#ff0000',
            'sky': '#00c8ff',
            'ocean': '#009ac6',
            'abby': '#fdcb26',
            'taliqua': '#e15850',
            'gray': '#7c7c7c'
        },
        extend: {
            fontFamily: {
                Lato: ['Lato', 'sans-serif'],
                Signika: ['Signika'],
                Guthen: ['guthen-bloots']
            },
            fontSize: {
                '5.3xl': '3.3rem',
                '5.4xl': '3.4rem',
                '5.5xl': '3.5rem'
            },
            backgroundImage: {
                'curtis': "url('/public/assets/curtis.png')",
                'abby': "url('/public/assets/abby.png')",
                'taliqua': "url('/public/assets/taliqua.png')",
            }
        },
        screens: {
            'phone': '320px',
            'tablet': '768px',
            'laptop': '1025px',
            'desktop': '1280px'
        },
    },
    plugins: [],
}
