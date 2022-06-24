<template>
  <img
      :src="imageSrc"
      class="my-default-class"
      :class="{'my-class':is_admin,'my-other-class':is_admin}">
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
import Header from "@/components/Header.vue";

export default {
  components: {Header},
  data() {
    return {
      users: [],
      showHeader: true,
      imageSrc: "https://picsum.photos/200/300",
      imageClass: 'my-class',
      is_admin: true
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
.my-class {
  border: solid 4px red;
}

.my-other-class {
  border: solid 4px blue;
}
</style>

