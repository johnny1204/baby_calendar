require('./bootstrap');

window.Vue = require('vue');
import Vuetify from 'vuetify';
import moment from 'moment';
import 'vuetify/dist/vuetify.min.css';
Vue.use(Vuetify);

Vue.component('time-block', require('./components/TimeBlock.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);

const app = new Vue({
  el: "#app",
  vuetify: new Vuetify(),
  data: () => ({
    showModal: false,
    time: 0,
    events: [],
    today: moment(new Date()).format('YYYY-MM-DD'),
    focus: moment(new Date()).format('YYYY-MM-DD'),
  }),
  methods: {
    openModal(time) {
      this.showModal = true;
      this.time = time;
    },
    closeModal() {
      this.showModal = false;
    },
    getEvents() {
      const events = [
        {
          name: 'Weekly Meeting',
          start: '2020-09-27 09:00',
          end: '2020-09-27 10:00',
        },
      ];
      this.events = events
    }
  },
  mounted () {
    this.$refs.calendar.scrollToTime('08:00')
  },
});
