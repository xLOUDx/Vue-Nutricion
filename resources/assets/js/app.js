import Vue from 'vue'
import VueRouter from 'vue-router'
Vue.use(VueRouter)


require('./bootstrap');

window.Vue = require('vue');

Vue.component('Myheader', require('./components/Myheader.vue'));
Vue.component('Myfooter', require('./components/Myfooter.vue'));
Vue.component('Mycomponent-0', require('./components/Mycomponent-0.vue'));
Vue.component('Mycomponent-1', require('./components/Mycomponent-1.vue'));
Vue.component('Mycomponent-2', require('./components/Mycomponent-2.vue'));
Vue.component('Mycomponent-3', require('./components/Mycomponent-3.vue'));
Vue.component('MycomponentChart', require('./components/MycomponentChart.vue'));
Vue.component('Myblog', require('./components/Myblog.vue'));
Vue.component('Newblog', require('./components/Newblog.vue'));



import MyPatients from './components/Mypatients.vue'
import MyIndex from './components/Myindex.vue'
import MySearch from './components/Mysearch.vue'


const routes = [
  { name:'MyIndex', path: '/', component: MyIndex },
  { name:'MySearch', path: '/search', component: MySearch, props: true },
  { name:'MyPatients', path: '/search/:iden/patients', component: MyPatients, props: true },
]

const router = new VueRouter({
  routes, // short for `routes: routes`
 // mode: 'history'
})

const app = new Vue({
    el: '#app',
    router
});
