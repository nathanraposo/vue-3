<template>
  <h2>Home</h2>
  {{ fullName }}
  <h2>Admin</h2>

  <ul>
    <template v-for="(user, index) in users" :key="index">
      <li v-if="user.is_admin">{{ user.nome }}</li>
    </template>
  </ul>

  <h2>Not Admin</h2>

  <ul>
    <template v-for="(userNotAdmin, index) in usersIsNotAdmin" :key="index">
      <li>{{ userNotAdmin.nome }}</li>
    </template>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      user: {
        nome: 'Nathan',
        sobrenome: 'Raposo',
      },
      users: [
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
        },
        {
          nome: 'Rafael',
          is_admin: 0
        }
      ]
    }
  },

  computed: {
    fullName() {
      return this.user.nome + ' ' + this.user.sobrenome
    },

    usersIsNotAdmin() {
      return this.users.filter((user) => user.is_admin === 0)
    }
  }
}
</script>


