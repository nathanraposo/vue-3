<template>
  <ul>
    <template v-for="(user , key) in users">
      <li v-if="user.is_admin === 1">
        {{ key }} - {{ user.firstName }}
      </li>
    </template>
  </ul>
</template>

<script>

import Header from '@/components/Header.vue';

export default {
  components: {Header},
  data() {
    return {
      users: [
        {
          id: 1,
          firstName: 'Nathan',
          age: 28,
          is_admin: 1
        },
        {
          id: 2,
          firstName: 'Natalia',
          age: 35,
          is_admin: 0
        },
        {
          id: 3,
          firstName: 'Micaella',
          age: 0,
          is_admin: 0
        },

      ]
    }
  }
}
</script>

