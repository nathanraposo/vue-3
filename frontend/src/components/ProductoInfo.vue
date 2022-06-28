<template>
  Likes: {{ likes }}
  Comments: {{ comments }}
</template>

<script setup>
defineProps({
  likes: Number,
  comments: Number
});
</script>

<style scoped>

</style>