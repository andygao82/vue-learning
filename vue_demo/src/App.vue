<template>
  <div>
    <header>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1>WO Cao, Wu qing</h1>
          </div>
        </div>
      </div>
    </header>
    <div class="content">
      <div class="container">
        <div class="row">
          <Add/>
          <List/>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Add from './components/Add'
import List from './components/List'

export default {
  name: 'App',
  components: {
    Add,
    List
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
