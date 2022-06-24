<template>
  <!--  <span v-show="showHeader">-->
  <!--    <Header />-->
  <!--  </span>-->
  <!--  <template v-if="showHeader">-->
  <!--    <Header />-->
  <!--  </template>-->
  <!--  <template v-else>Sem header!!!</template>-->
  <h2>Lista de Usuários</h2>
  <ul>
    <li v-for="user in users" :key="user.id">
        {{ user.firstName }}
      <button v-if="user.is_admin">Admin</button>
      <button v-else>Usuário</button>
    </li>
  </ul>
  <!--  <h2>Lista de Usuários</h2>-->
  <!--  <ul>-->
  <!--    <li v-for="user in users" :key="user.id">-->
  <!--      {{ user.firstName }}-->
  <!--    </li>-->
  <!--  </ul>-->
</template>

<script>

import http from '@/services/http.js';
import Header from "@/components/Header.vue";

export default {
  components: {Header},
  data() {
    return {
      users: [],
      showHeader: true
    }
  },

  async mounted() {
    try {
      const {data} = await http.get('api/users')
      this.users = data;
    } catch (error) {
      console.log(error)
    }
  }

}
</script>

