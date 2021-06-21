window.Vue = require('vue').default;
import VueRouter from 'vue-router'

Vue.use(VueRouter);

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default},
]


const router = new VueRouter({
    mode: 'history',
    routes
})


const home = new Vue({
    el: '#home',
    router,
});

