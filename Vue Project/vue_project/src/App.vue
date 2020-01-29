<template>
  <div id="app">
    <img src="./assets/logo.png">
    <div class="container">
      <div class="row">
        <ul v-for="category in categories" :key="category.id">
          <li>
            {{category.title}}
            <ul v-for="item in items" :key="item.id"> -0
              <li>{{item.name}}</li>
              <button @click="updatename(item, item.id, item.name)">update</button>

            </ul>

          </li>

        </ul>
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

  },
  data() {
    return{
      items:[
        {
          id: '0',
          name: 'bob',
          content: 'Vue is good',
          catid: '0'
        },
        {
          id: '1',
          name: 'cat',
          content: 'Vue is not good',
          catid: '1'
        },
        {
          id: '2',
          name: 'rat',
          content: 'Vue is not bad',
          catid: '0'
        },
        {
          id: '3',
          name: 'mice',
          content: 'Vue is not worse',
          catid: '1'
        }
      ],
      categories:[
        {
          id: '0',
          title: 'Category 0 zero'
        },
        {
          id: '1',
          title: 'Category 1 one'
        }
      ],
      isShow: false
    }
  },
  methods:{
    updatename(item, itemid, itemname){
       console.log(item)
      // console.log(itemid)
      // console.log(itemname)
      // let index = item.indexOf(itemname)
      // console.log(index)
      this.$set(item, 'name', 'wocao')
    }

  },
  components: {

  },
  computed:{

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
