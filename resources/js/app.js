import './bootstrap';

// Include your template asset folders so Vite picks them up
import.meta.glob([
    '../templates/cool_templates/**/assets/**',
    '../templates/cool_templates/**/css/**',
    '../templates/cool_templates/**/index.js',
]);