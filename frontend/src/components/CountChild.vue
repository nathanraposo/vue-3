<template>
  <button @click="add">add from child</button>
</template>

<script>
export default {
  name: "CountChild",
  methods: {
    add() {
      this.$emit('addCount')
    }
  }
}
</script>

<style scoped>

</style>