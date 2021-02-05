import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from "../pages/Home.vue"
import About from "../pages/About.vue"

const router = new VueRouter({
    mode: 'history',
    routes: [{
        path: '/',
        component: Home,
        name: 'home'
    },
    {
        path: '/about',
        component: About,
        name: 'about'
    },
  ]
})

export default router;