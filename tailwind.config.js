import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "class",
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
                lightMd: {
                    background: '#AAAAAA',
                    topBarBg: '#55FFFF',
                    logoClr: '#000000',
                    Nav_Bg: '#0000FF',
                    title_txt: '#0000FF',
                },
                
                darkMd: {
                    background: '#000000',
                    topBarBg: '#000000',
                    logoClr: '#FFFFFF',
                    Nav_Bg: '#BB0000',
                    title_txt: '#FF0000',
                }
            }
        },
    },

    plugins: [forms], 
};
