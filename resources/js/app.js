require('./bootstrap');
import Vue from 'vue'
window.Vue = require("vue");

import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

Vue.Component('example-component', require('./components/exampleComponent.vue').default);

// Vue.component('product-create',require('./components/product/cerate.vue').default)

const app = new Vue({
    el:'#app',
});
