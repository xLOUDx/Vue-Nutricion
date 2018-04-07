import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)

require('./bootstrap');

window.Vue = require('vue');

Vue.component('Myheader', require('./components/Myheader.vue'));
Vue.component('Myfooter', require('./components/Myfooter.vue'));
Vue.component('Add-1', require('./components/Add-1.vue'));
Vue.component('Add-2', require('./components/Add-2.vue'));



import MyPatients from './components/Mypatients.vue'
import MyIndex from './components/Myindex.vue'
import MySearch from './components/Mysearch.vue'
import Mycomment from './components/Mycomment.vue'


const routes = [
  { name:'MyIndex', path: '/', component: MyIndex },
  { name:'MySearch', path: '/search', component: MySearch, props: true },
  { name:'MyPatients', path: '/search/:iden/patients', component: MyPatients, props: true },
  { name:'Mycomment', path: '/search/patients/comments', component: Mycomment }
]

const router = new VueRouter({
  routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router
});
