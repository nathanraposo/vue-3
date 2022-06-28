<template>
  <h2 id="app-products">Products</h2>
  <h2 id="my-app">Products my app</h2>

  <h2>Produto 1</h2>
  <ProductoInfo
      :likes=product.likes
      :comments=product.comments
  />

</template>

<script setup>

import ProductoInfo from "@/components/ProductoInfo.vue";
import {reactive} from "vue";

const product = reactive({
  likes: 20,
  comments: 10
})

</script>

<style>
#app-products {
  color: red;
}
</style>