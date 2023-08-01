import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';

import Userback from '@userback/widget';

window.Alpine = Alpine;
Alpine.plugin(focus);
Alpine.start();

Userback(import.meta.env.VITE_USERBACK_ID);
