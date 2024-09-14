const defaultTheme = require('tailwindcss/defaultTheme');

{import('tailwindcss').Config} 
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/*.js',
    ],

    theme: {
        extend: {
            animation: {
                'gradient-move': 'gradient 8s ease infinite',
                'spin-slow': 'spin 3s linear infinite',
                'ping-slow': 'ping 3s cubic-bezier(0, 0, 0.2, 1) infinite',
                'bounce-slow': 'bounce 3s infinite',
                backgroundSize: {
                    '200%': '200% 200%',
                },
              },
              keyframes: {
                gradient: {
                    '0%, 100%': { 'background-position': '0% 50%' },
                    '50%': { 'background-position': '100% 50%' },
                  },
                },                
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            transitionDuration: {
                '2000': '2000ms',
            },
        },
    },
    plugins: [require('@tailwindcss/forms')],
};
