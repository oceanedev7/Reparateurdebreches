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
                "bleu-fonce": "#002A63",
                "bleu-clair": "#C9D6F7",
                "bleu": "#A4BCF9",
                "gris-clair": "#E8E8E8",
                "gris-fonce": "#898989",



               
            },
        },
    },

    plugins: [forms],
};
