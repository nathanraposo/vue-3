<template>
  <img
      :src="imageSrc"
      class="my-default-class"
      :class="{'my-class':is_admin,'my-other-class':!is_admin}">
  <h2>Lista de Usuários</h2>
  <ul>
    <li v-for="user in users.users" :key="user.id">
      {{ user.firstName }}
    </li>
  </ul>
</template>

<script setup>
import {onMounted, reactive, ref} from "vue";
import http from '@/services/http.js'

let users = reactive({
  users: []
})

const imageSrc = ref('https://picsum.photos/200/300')
let is_admin = ref(true)

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
.my-class{
  border: solid 4px red;
}

.my-other-class{
  border: solid 4px blue;
}
</style>
