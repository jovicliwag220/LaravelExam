require('./bootstrap');

// Require Vue
window.Vue = require('vue').default;

// Register Vue Components
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('example-component', require('./components_argon_vue/"Name_of_component".vue'));
Vue.component('test-line', require('./components/testline.vue'));
Vue.component('test-frontend-input', require('./components/testfrontendinput.vue'));
Vue.component('retrieve-frontend', require('./components/retrievefrontend.vue'));

// Initialize Vue
const app = new Vue({
    el: '#app',
});