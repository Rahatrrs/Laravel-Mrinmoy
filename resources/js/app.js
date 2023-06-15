import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
import 'flatpickr/dist/flatpickr.min.css';
import flatpickr from 'flatpickr';

window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
