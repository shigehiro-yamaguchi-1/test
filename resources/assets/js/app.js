
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'

import router from './router'
import http from './services/http.js'
import userStore from './stores/userStore'

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/ExampleComponent.vue'));

const app = new Vue({
    router,
    el: '#app',
    created () {
        http.init()
        userStore.init()
    },
    render: h => h(require('./components/layouts/app.vue')),
});
