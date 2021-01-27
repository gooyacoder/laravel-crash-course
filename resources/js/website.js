const { values } = require('lodash');

require('./bootstrap');
window.Vue = require('vue');

Vue.component('contact-us-form', require('./components/ContactForm.vue').default);

const app = new Vue({
    el: '#app'
});