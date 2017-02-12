<template lang="html">
  <div id="app">
  <div class="panel panel-default">
    <div class="panel-heading">
      Birthday Problem

      <a href="#" class="pull-right" @click.prevent="toggleAdvancedOptions" v-if="advanced">Hide advanced options</a>
      <a href="#" class="pull-right" @click.prevent="toggleAdvancedOptions" v-if="! advanced">Show advanced options</a>
    </div>

    <div class="panel-body">
      <div class="form-group" v-if="false">
        <label for="" class="control-label">Shared Birthdays</label>
        <step-input v-model="sharedBirthdays"></step-input>
      </div>
      <div class="form-group">
        <label for="" class="control-label">Total People</label>
        <step-input v-model="totalPeople"></step-input>
      </div>
      <div class="form-group">
        <label for="" class="control-label">Number of Days</label>
        <step-input v-model="totalDays"></step-input>
      </div>
      <div class="form-group" v-if="advanced">
        <label for="" class="control-label">Precision</label>
        <step-input v-model="precision" min="0" max="20"></step-input>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading">
      <span class="result">@{{ formattedProbability }}</span>
    </div>
  </div>
  </div>
</template>

<script>
import StepInput from "./components/step-input"

export default {
  data() {
    return {
      advanced: false,
      precision: 3,
      totalDays: 365,
      totalPeople: 23,
      sharedBirthdays: 2,
    }
  },

  components: {
    StepInput,
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
      try {
        return `${this.probability.toFixed(this.precision)}%`
      } catch (e) {
        return `${this.probability.toFixed(20)}%`
      }
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
}
</script>
