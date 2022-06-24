<template>
  <input type="text" v-model="userName">

  <template v-for="user in users">
    <input type="checkbox"
           @click="userName = user.firstName"
           :checked="userName === user.firstName">
           {{ user.firstName }}
  </template>

  <select v-model="userName">
    <option :value="user.firstName" v-for="user in users">{{ user.firstName }}</option>
  </select>
  <text></text>
</template>

<script setup>

import {reactive, ref} from "vue";

const userName = ref('Nathan')
const users = reactive([
      {
        id: 1,
        firstName: 'Nathan'
      },
      {
        id: 2,
        firstName: 'Natalia'
      },
      {
        id: 1,
        firstName: 'Micaella'
      }
    ]
)
</script>

<style scoped>

</style>
