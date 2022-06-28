<template>
  Likes: {{ likes }}
  Comments: {{ comments }}
</template>

<script>
export default {
  name: "ProductInfo",
  props: {
    likes: Number,
    comments: Number
  }
}
</script>

<style scoped>

</style>