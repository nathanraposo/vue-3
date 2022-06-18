<template>
  <h2>App</h2>
  {{count}}
  <button v-on:click="count++">Add</button>

  <router-link to="/">Home</router-link>
  <router-link to="/about">About</router-link>
  <router-view></router-view>
</template>

<script setup>
import {onMounted, onUpdated, ref} from "vue";

const count = ref(0)

onMounted(() => {
  console.log('onMounted')
})

onUpdated(() => {
  console.log('onUpdated')
})

</script>

<style scoped>

</style>
