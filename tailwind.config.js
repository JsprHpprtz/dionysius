import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#83191a',
                    light: '#a61f20',
                    dark: '#5f1213'
                }
            },
        },
    },

    plugins: [require("daisyui")],
    daisyui: {
        themes: ["light", "dark"],
        darkTheme: "dark",
    },
};
