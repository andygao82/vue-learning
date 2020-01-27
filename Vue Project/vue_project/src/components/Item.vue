<template>
  <li>
    <span>{{comment.name}}</span>
    <p>{{comment.content}}</p>
    <button>Delete</button>
  </li>
</template>

<script>
    export default {
      props:{
        comment: Object
      },
      name: "Item"
    }
</script>

<style scoped>

</style>
