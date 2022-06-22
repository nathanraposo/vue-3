<template>
  <h2>Lista de Usuários</h2>
  <ul>
    <li v-for="user in users.users" :key="user.id">
      {{ user.firstName }}
    </li>
  </ul>
</template>

<script setup>
import {onMounted, reactive} from "vue";
import http from '@/services/http.js'

let users = reactive({
  users: []
})

onMounted(async () => {
  try {
    const {data} = await http.get('/api/users')
    users.users = data
  } catch (error) {
    console.log(error)
  }
})
</script>

<style scoped>

</style>
