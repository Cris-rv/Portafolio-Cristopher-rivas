import AOS from 'aos';
import 'aos/dist/aos.css';
import 'hover.css/css/hover-min.css';
import './bootstrap';

import Alpine from 'alpinejs';

document.addEventListener('DOMContentLoaded', function() {
    AOS.init();
});

AOS.init({
    duration: 1200, // Duración en milisegundos
    easing: 'ease-in-out', // Efecto de transición
});

window.Alpine = Alpine;

Alpine.start();
