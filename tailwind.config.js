/** @type {import('tailwindcss').Config} */
export default {
    content: ["resources/views/**/*.{html,js,php}"],
    theme: {
        fontSize: {
          headline:[
            "2.5rem",
                {
                    fontWeight: "600",
                },
          ],
            headline1: [
                "1.75rem",
                {
                    lineHeight: "2.25rem",
                    fontWeight: "600",
                },
            ],
            headline2: [
                "1.25rem",
                {
                    lineHeight: "1.75rem",
                    fontWeight: "600",
                },
            ],
            headline3: [
                "1.125rem",
                {
                    lineHeight: "1.5rem",
                    fontWeight: "600",
                },
            ],
            headline4: [
                "1rem",
                {
                    lineHeight: "1.25rem",
                    fontWeight: "600",
                },
            ],
            body1: [
                "1rem",
                {
                    lineHeight: "1.5rem",
                    fontWeight: "400",
                },
            ],

            body2: [
                "0.875rem",
                {
                    lineHeight: "1.25rem",
                    fontWeight: "400",
                },
            ],
            body3: [
                "0.75rem",
                {
                    lineHeight: "1rem",
                    fontWeight: "400",
                },
            ],
            btnnormal: [
                "1.125rem",
                {
                    lineHeight: "1.5rem",
                    fontWeight: "400",
                },
            ],
            btnmedium: [
                "1rem",
                {
                    lineHeight: "1.25rem",
                    fontWeight: "400",
                },
            ],
            btnsmall: [
                "0.875rem",
                {
                    lineHeight: "1rem",
                    fontWeight: "400",
                },
            ],
            text1: [
                "1rem",
                {
                    lineHeight: "1.5rem",
                    fontWeight: "400",
                },
            ],
            text2: [
                "0.75rem",
                {
                    lineHeight: "1rem",
                    fontWeight: "400",
                },
            ],
        },
        borderRadius: {
            DEFAULT: "0.5rem",
        },
        extend: {
            colors: {
                primary: {
                    25: "#FFF4F6",
                    50: "#FFE9ED",
                    100: "#FFDEE4",
                    200: "#FFD3DB",
                    300: "#FFBDC8",
                    400: "#FFA7B6",
                    500: "#FF91A4",
                    600: "#E17487",
                    700: "#C3576A",
                    800: "#A43A4C",
                    900: "#952C3E",
                },
                neutral: {
                    0: "#FFFFFF",
                    25: "#F7F7F7",
                    50: "#EFEFEF",
                    100: "#E7E7E7",
                    200: "#DFDFDF",
                    300: "#CFCFCF",
                    400: "#BFBFBF",
                    500: "#AFAFAF",
                    600: "#8F8F8F",
                    700: "#6F6F6F",
                    800: "#4F4F4F",
                    900: "#2E2E2E",
                },
                success: {
                    25: "#EEF8EE",
                    50: "#DDF0DD",
                    100: "#CCE9CD",
                    200: "#BBE2BC",
                    300: "#98D39A",
                    400: "#76C579",
                    500: "#54B657",
                    600: "#439246",
                    700: "#326D34",
                    800: "#224923",
                    900: "#19371A",
                },
                warning: {
                    25: "#FFF7E9",
                    50: "#FFEFD3",
                    100: "#FEE7BD",
                    200: "#FEDFA7",
                    300: "#FED07A",
                    400: "#FDC04E",
                    500: "#FDB022",
                    600: "#CA8D1B",
                    700: "#986A14",
                    800: "#65460E",
                    900: "#65460E",
                },
                danger: {
                    25: "#FFE5E5",
                    50: "#FFCCCC",
                    100: "#FFB2B2",
                    200: "#FF9999",
                    300: "#FF6666",
                    400: "#FF3333",
                    500: "#FF0000",
                    600: "#CC0000",
                    700: "#990000",
                    800: "#660000",
                    900: "#330000",
                },
            },
            padding: {
                xbtnpadding: "1.12rem",
                ybtnpadding: "0.62rem",
            },
            boxShadow: {
                btnshadow: "3px 3px 14px 5px rgba(255, 145, 164, 0.20)",
            },
        },
    },
    plugins: [],
};
