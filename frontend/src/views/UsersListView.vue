<template>
  <h2>Lista de Usuários</h2>
  <ul>
    <li v-for="user in users" :key="user.id">
      {{ user.firstName }}
      <button v-if="user.is_admin">Admin</button>
      <button v-else>Usuário</button>
    </li>
  </ul>
</template>

<script>

import http from '@/services/http.js';

export default {
  data() {
    return {
      users: [],
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

<style scoped>

</style>