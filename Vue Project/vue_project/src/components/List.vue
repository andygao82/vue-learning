<template>
  <div class="col-12 col-md-6 col-lg-8">
    <h2>Comments</h2>
    <ul>
      <item v-for="(comment, index) in comments" :key="index" :comment="comment" />
    </ul>
  </div>
</template>

<script>
  import Item from './Item.vue'
  export default {
    props: ['comments'],
    name: 'List',
    components:{
      Item
    }
  }
</script>

<style scoped>
  ul{
    list-style: none;
  }
</style>
