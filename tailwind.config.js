import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import flowbite from 'flowbite/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./src/**/*.{html,js}",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },

            colors: {
                "bleu-fonce": "#002A63",
                "bleu-clair": "#C9D6F7",
                "bleu": "#A4BCF9",
                "gris-clair": "#E8E8E8",
                "gris-fonce": "#898989",
            },

            boxShadow: {
                xl: "0 10px 15px -5px rgb(0 0 0 / 0.5), 10px 10px 10px 0px rgb(0 0 0 / 0.5);",
            },

            animation: {
                caroussel: 'caroussel 20s linear infinite', 
            },
            keyframes: {
                caroussel: {
                  '0%': { transform: 'translateX(0)' },
                  '100%': { transform: 'translateX(-100%)' },
                },
            },
        },
    },

    plugins: [
        forms,
        flowbite,
    ],
};
