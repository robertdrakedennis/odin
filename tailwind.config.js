module.exports = {
  theme: {
    fontFamily: {
      sans: [
        'Libre Franklin',
        '-apple-system',
        'BlinkMacSystemFont',
        '"Segoe UI"',
        'Roboto',
        '"Helvetica Neue"',
        'Arial',
        '"Noto Sans"',
        'sans-serif',
        '"Apple Color Emoji"',
        '"Segoe UI Emoji"',
        '"Segoe UI Symbol"',
        '"Noto Color Emoji"',
      ],
      serif: [
        'Georgia',
        'Cambria',
        '"Times New Roman"',
        'Times',
        'serif',
      ],
      mono: [
        'Menlo',
        'Monaco',
        'Consolas',
        '"Liberation Mono"',
        '"Courier New"',
        'monospace',
      ],
    },
    extend: {
        width: theme => ({
            160: '40rem',
        }),
        spacing: {
            '74': '26rem',
        },
        colors: {
            primary: {
                default: "#BA2525",
                "100": "#FACDCD",
                "200": "#F29B9B",
                "300": "#E66A6A",
                "400": "#D64545",
                "500": "#BA2525",
                "600": "#A61B1B",
                "700": "#911111",
                "800": "#780A0A",
                "900": "#610404",
            }
        }
    }
  },
  variants: {},
  plugins: []
}