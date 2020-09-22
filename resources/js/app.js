require('./bootstrap');

window.Vue = require('vue');
Vue.component('time-block', require('./components/TimeBlock.vue').default);
Vue.component('modal', require('./components/Modal.vue').default);

const app = new Vue({
  el: "#app",
  data() {
    return {
      showModal: false,
      time: 0
    }
  },
  methods: {
    openModal(time) {
      this.showModal = true;
      this.time = time;
    },
    closeModal() {
      this.showModal = false;
    }
  },
});