import './bootstrap';
import './prism';
import './general'

import Alpine from 'alpinejs';

// Import Image assets and make them available to vite
import.meta.glob([
    '../img/**',
]);

window.Alpine = Alpine;

Alpine.start();


