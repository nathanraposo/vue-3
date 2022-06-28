<template>
  <Nav/>

  <router-view></router-view>

  <button @click="count++">Clique {{ count }}</button>
  <CountChild  v-on:addCount="count++"/>
</template>

<script>
import Nav from "@/components/Nav.vue";
import CountChild from "@/components/CountChild.vue";

export default {
  components: {CountChild, Nav},
  data() {
    return {
      count: 0
    }
  }
}
</script>

<style scoped>

</style>

