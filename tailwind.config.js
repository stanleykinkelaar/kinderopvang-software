module.exports = {
    content: [
        "./resources/**/*.blade.php",
    ],
    darkMode: 'class', // or 'media' or 'class',
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
                'body': ['Inter', 'ui-sans-serif', 'system-ui', '-apple-system', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'Arial', 'Noto Sans', 'sans-serif', 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol', 'Noto Color Emoji'],
                'mono': ['ui-monospace', 'SFMono-Regular', 'Menlo', 'Monaco', 'Consolas', 'Liberation Mono', 'Courier New', 'monospace']
            },
            transitionProperty: {
                'width': 'width'
            },
            minWidth: {
                '20': '20rem'
            },
            // colors: {
            //     'kidler-green': '#C0D8C0',
            //     'kidler-beige': '#F5EEDC',
            //     'kidler-red': '#DD4A48',
            //     'kidler-orange': '#ECB390',
            // }
        },
    },

    // plugins: [
    //     require('@themesberg/flowbite/plugin'),
    // ],
}
