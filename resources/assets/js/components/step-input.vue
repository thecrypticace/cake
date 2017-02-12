<template lang="html">
  <input
    type="number"
    :min="min"
    :max="max"
    class="form-control"
    v-model="internal"
  >
</template>

<script>
export default {
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
}
</script>
