<template>
  <h2 id="app-products">Products</h2>
  <h2 id="my-app">Products my app</h2>

  <h2>Produto 1</h2>
  <p>Texto</p>
  <ProductInfo :likes=product.likes :comments=product.comments />
</template>

<script>
import ProductInfo from "@/components/ProductInfo.vue";
export default {
  name: "Products",
  components: {ProductInfo},
  data(){
    return{
      product:{
        likes:20,
        comments:30
      }
    }
  }
}
</script>

<style>
#app-products{
  color: red;
}
</style>