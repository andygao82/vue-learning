# Vue-Learning

v-modal // bind data
v-bind: or :  // force bind
v-on: or @ // bind and event

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