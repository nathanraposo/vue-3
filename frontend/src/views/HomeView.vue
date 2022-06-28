<template>
  <h2>Home</h2>
  <h2>Admin</h2>
  <ul>
    <template v-for="(user, index) in users" :key="index">
      <li v-if="user.is_admin">{{ user.nome }}</li>
    </template>
  </ul>
  <h2>Not Admin</h2>

  <ul>
    <template v-for="(user, index) in notAdmin" :key="index">
      <li>{{ user.nome }}</li>
    </template>
  </ul>
</template>

<script setup>

import {computed, reactive} from "vue";

const user = reactive({
  nome: 'Nathan',
  sobrenome: 'Raposo'
})

const users = reactive([
  {
    nome: 'Nathan',
    is_admin: 1
  },
  {
    nome: 'Natalia',
    is_admin: 0
  },
  {
    nome: 'Micaella',
    is_admin: 1
  }
])

const fullName = computed(() => {
  return user.nome + ' ' + user.sobrenome
})

const notAdmin = computed(() => {
  return users.filter((user) => user.is_admin === 0)
})

</script>

