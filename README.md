# Vue-Learning
    
    v-modal // bind data
    v-bind: or :  // force bind
    v-on: or @ // bind and event
    
    v:text == textContent
    v-html == innerHTML

    computed 比 watch 简单
    watch 用的比较少
    get set method in computed

    class="cClass" :class="a" // a 为变量
    :class="{aClass: isA, bClass: isB}"  // isA, isB 为true，false 变量
    :class="['aClass', 'cClass']"  //用的比较少
    
    v-if
    v-else 
    v-show // 反复频繁切换，较好. 只是隐藏，不是删除
    
    v-for
    v-for="(p, index) in persons" :key="index"
    v-for="(value, key) in persons[1]" :key="key"

    <button @click="test1">test1</button>
    <button @click="test2('msg')">test2</button>
    <button @click="test3">test3</button>
    <button @click="test4(123, $event)">test4</button> //event and number
    
    @click.stop // stop 冒泡 ==  event.stopPropagation()
    @click.prevent  //  == event.preventDefault()

     Vue.filter('dateStr', function (value, format) {
         return moment(value).format(format || 'YYYY-MM-DD HH:mm:ss')
     })   //  moment.js plugin
     
     <p ref="content">wo qu</p>
     p = this.$refs.content.textContent
     
     v-cloak 防闪现
     
     Vue.directive('upperText', function (el, binding) {
         //console.log(el, binding)
         el.textContent = binding.value.toUpperCase();
     })
     
     npm install -g vue-cli
     vue init webpak vue_demo_name
     cd vue_demo_name
     npm install
     npm run dev
