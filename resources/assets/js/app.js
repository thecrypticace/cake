
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
  el: '#app',
  data() {
    return {
      sharedBirthdays: 2,
      totalPeople: 23,
      totalDays: 365,
    }
  },

  computed: {
    exponent() {
      return Math.pow(this.totalPeople, 2) / ( 2 * this.totalDays)
    },

    probability() {
      return `${(100 * this.compute()).toFixed(3)}%`
    },
  },

  methods: {
    compute() {
      return 1 - Math.pow(Math.E, -this.exponent)
    },
  },
});
