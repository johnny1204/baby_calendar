require('../app');
import { Vue } from '../app';
import Vuetify from 'vuetify';
import moment from 'moment';
import '@mdi/font/css/materialdesignicons.css';
import 'vuetify/dist/vuetify.min.css';

Vue.use(Vuetify);

Vue.component('TimeBlock', require('../components/TimeBlock.vue').default);
Vue.component('Modal', require('../components/Modal.vue').default);

new Vue({
    el: '#app',
    vuetify: new Vuetify({
        icons: {
            iconfont: 'mdi'
        }
    }),
    data: () => ({
        showModal: false,
        time: 0,
        events: [],
        today: moment(new Date()).format('YYYY-MM-DD'),
        focus: moment(new Date()).format('YYYY-MM-DD')
    }),
    mounted() {
        this.$refs.calendar.scrollToTime('08:00');
    },
    methods: {
        openModal({ event }) {
            this.showModal = true;
            this.time = event.start;
        },
        closeModal() {
            this.showModal = false;
        },
        getEvents() {
            const events = [
                {
                    name: 'Weekly Meeting',
                    start: '2021-01-11 09:00',
                    end: '2021-01-11 10:00'
                }
            ];
            this.events = events;
        },
        prev() {
            this.$refs.calendar.prev();
        },
        next() {
            this.$refs.calendar.next();
        }
    }
});
