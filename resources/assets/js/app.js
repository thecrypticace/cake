import Vue from "vue"

Vue.component("step-input", {
  template: `
    <input
      type="number"
      :min="min"
      :max="max"
      class="form-control"
      v-model="internal"
    >
  `,

  props: ["value", "min", "max"],

  data() {
    return {
      internal: 0,
    }
  },

  created() {
    this.internal = this.value
  },

  watch: {
    internal() {
      this.$emit("input", this.internal)
    },

    value(newValue) {
      this.internal = newValue
    },
  },
})

const app = new Vue({
  el: '#app',
  data() {
    return {
      advanced: false,
      precision: 3,
      totalDays: 365,
      totalPeople: 23,
      sharedBirthdays: 2,
    }
  },

  computed: {
    probability() {
      let probability = 100 * this.compute()

      if (isNaN(probability) || ! isFinite(probability)) {
        return 0
      }

      return probability
    },

    formattedProbability() {
      return `${this.probability.toFixed(this.precision)}%`
    },
  },

  methods: {
    toggleAdvancedOptions() {
      this.advanced = ! this.advanced
    },

    compute() {
      let exponent = (Math.pow(this.totalPeople, 2) - this.totalPeople) / (2 * this.totalDays)

      return 1 - Math.pow(Math.E, -exponent)
    },
  },
});
