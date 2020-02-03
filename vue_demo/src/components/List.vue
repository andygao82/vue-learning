<template>
  <div class="col-12 col-md-6 col-lg-8">
    <h2>Comments</h2>
    <ul>
      <li>
        <span>Adam Said</span>
        <p>Vue is not bad!</p>
        <button>Delete</button>
      </li>
      <li>
        <span>Lucy Said</span>
        <p>I love Vue</p>
        <button>Delete</button>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'List'
}
</script>

<style scoped>
  ul{
    list-style: none;
  }
</style>
