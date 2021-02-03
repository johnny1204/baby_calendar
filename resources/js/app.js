require('./bootstrap');
import Vuetify from 'vuetify';
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/dist/vuetify.min.css';

window.Vue = require('vue');

export const Vue = window.Vue;
Vue.use(Vuetify);

new Vue({
    el: '#header',
    vuetify: new Vuetify({
        icons: {
            iconfont: 'mdi'
        }
    }),
    data: () => ({
        drawer: false,
        group: null
    }),
    watch: {
        group() {
            this.drawer = false;
        }
    }
});
