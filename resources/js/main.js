import Vue from 'vue';
import Component from './components/component.vue';

new Vue({
  el: '#app',
  data: {
    message: 'Vue loaded!',
  },
  components: {
    Component
  }
});