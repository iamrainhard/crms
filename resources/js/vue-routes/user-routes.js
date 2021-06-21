window.Vue = require('vue').default;
import VueRouter from 'vue-router'

Vue.use(VueRouter);

let routes = [
    { path: '/dashboard', component: require('../components/user/Dashboard.vue').default},
]


const router = new VueRouter({
    mode: 'history',
    routes
})


const dashboard = new Vue({
    el: '#home',
    router,
});

