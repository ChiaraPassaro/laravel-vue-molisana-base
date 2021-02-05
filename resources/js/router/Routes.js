import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import Home from "../pages/Home.vue"
import About from "../pages/About.vue"
import Products from "../pages/Products.vue"
import Product from "../pages/Product.vue"

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
    {
        path: '/products',
        component: Products,
        name: 'products'
    },
    {
        path: '/products/:id',
        component: Product,
        name: 'product'
    },
  ]
})

export default router;