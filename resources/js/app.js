//

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

import './echo';
document.addEventListener('livewire:init', () => {

    Livewire.hook('request', ({ options }) => {

        const socketId = window.Echo ? .socketId();

        if (socketId) {
            options.headers['X-Socket-ID'] = socketId;
        } else {
            delete options.headers['X-Socket-ID'];
        }

    });

});