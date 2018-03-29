import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


require('./bootstrap');

window.Vue = require('vue');

Vue.component('Myheader', require('./components/Myheader.vue'));
Vue.component('Myfooter', require('./components/Myfooter.vue'));

import MyPatients from './components/Mypatients.vue'
import MyIndex from './components/Myindex.vue';

const routes = [
  { path: '/index', component: MyIndex },
  { path: '/patients', component: MyPatients },

]

const router = new VueRouter({
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router
});
