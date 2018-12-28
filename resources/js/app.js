
require('./bootstrap');
window.Vue = require('vue');
var VueScrollTo = require('vue-scrollto');
import VueRouter from 'vue-router';
import axios from 'axios';
import VueAxios from 'vue-axios';

Vue.component('header-component', require('./components/Header.vue'));
// Vue.component('service-component', require('./components/ServiceComponent'));
// Vue.component('reservation-component', require('./components/ReservationComponent'));
// Vue.component('gallery-component', require('./components/GalleryComponent'));
// Vue.component('blog-component', require('./components/BlogComponent'));
import menuComponent from './components/MenuComponent';
import aboutComponent from './components/AboutComponent';
Vue.component('footer-component', require('./components/FooterComponent'));

Vue.use(VueScrollTo, {
    container: "body",
    duration: 500,
    easing: "ease",
    offset: 0,
    force: true,
    cancelable: true,
    onStart: false,
    onDone: false,
    onCancel: false,
    x: false,
    y: true
});
Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const routes = [
    { path: '/', component: menuComponent },
    { path: '/home', component: menuComponent },
    { path: '/about', component: aboutComponent },

];

const router = new VueRouter({
    routes,
    linkActiveClass: "active",
});

const app = new Vue({
    el: '#app',
    router
});
