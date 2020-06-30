import Vue from 'vue'
import VueRouter from 'vue-router'
import bootstrap from './bootstrap'
import BootstrapVue from 'bootstrap-vue/dist/bootstrap-vue.esm';
import VueCarousel from 'vue-carousel';
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import VueCurrencyFilter from 'vue-currency-filter'
import icons from '../js/icons/font-awesome'
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue/dist/bootstrap-vue.css';
import Axios from 'axios'

Vue.prototype.$http = Axios;

Vue.use(VueCurrencyFilter, [
    { // default name 'currency'
      symbol: '$',
      thousandsSeparator: ',',
      fractionCount: 2,
      fractionSeparator: '.',
      symbolPosition: 'front',
      symbolSpacing: true
    },
    {
      name: 'euro',
      symbol: '€',
      thousandsSeparator: ' ',
      fractionCount: 2,
      fractionSeparator: '.',
      symbolPosition: 'front',
      symbolSpacing: true
    }
   ])

library.add(icons)
 
Vue.component('vue-icon', FontAwesomeIcon)
 
Vue.config.productionTip = false

Vue.use(BootstrapVue);
Vue.use(VueCarousel);
Vue.use(VueRouter);

import App from './views/App'
import store from "./store";
import routes from './router'

const app = new Vue({
    el: '#app',
    components: { App },
    store,
    router: new VueRouter(routes),
});