<template>
  <div class="col-12 col-md-6 col-lg-4">
    <div>
      <label for="username">Username</label>
      <input type="text" name="username" placeholder="username" v-model="name">
    </div>
    <div>
      <label for="comment">Comment</label>
      <textarea name="username" placeholder="comment" v-model="content"></textarea>
    </div>
    <button type="button" @click="add()">Submit</button>
  </div>
</template>

<script>
export default {

  data(){
    return{
      name: "",
      content: ""
    }
  },
  methods:{
    add(){
      const name = this.name.trim()
      const content = this.content.trim()
      if(!name || content){
        alert("something is wrong")
        return
      }
      const comment = {
        name,
        content
      }
      addComment(comment)
      this.name = ""
      this.content = ""
    }
  }
}
</script>

<style scoped>

</style>
