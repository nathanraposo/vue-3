<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <h2 id="my-app">App</h2>
  <header>
    <div class="wrapper">
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
        <RouterLink to="/products">Products</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />
</template>

<style scoped>
/*@import "@/assets/app.css";*/
#my-app{
  background-color: aqua;
}
</style>
