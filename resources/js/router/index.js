import Home from '../views/Home.vue'
import Menu from '../views/Menu.vue'
import About from '../views/About.vue'
import Checkout from '../views/Checkout.vue'

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/menu',
            name: 'menu',
            component: Menu,
        },
        {
            path: '/about',
            name: 'about',
            component: About,
        },
        {
            path: '/checkout',
            name: 'checkout',
            component: Checkout,
        }
    ]
}