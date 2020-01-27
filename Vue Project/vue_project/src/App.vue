<template>
  <div id="app">
    <img src="./assets/logo.png">
    <div class="container">
      <div class="row">
        <Add :addComment="comments"/>
        <List :comments="comments" />
      </div>
    </div>

  </div>
</template>

<script>
  import Add from './components/Add'
  import List from './components/List'

export default {
  name: 'App',
  props:{
    addComment:{ //指定属性名，属性类型，requrie
      type: Function,
      required: true
    }
  },
  data() {
    return{
      comments:[
        {
          name: 'bob',
          content: 'Vue is good'
        },
        {
          name: 'cat',
          content: 'Vue is not good'
        },
        {
          name: 'rat',
          content: 'Vue is not bad'
        }
      ]
    }
  },
  methods:{
    addComment(comment){
       this.comments.unshift(comment)
    }
  },
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
