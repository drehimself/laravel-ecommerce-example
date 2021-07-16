
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


import _ from "lodash";
Vue.prototype.__ = str => _.get(window.i18n, str);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example').default);
Vue.component('blog-posts', require('./components/BlogPosts').default);

const app = new Vue({
    el: '#app'
});
