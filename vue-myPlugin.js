(function () {
    const MyPlugin = {}

    MyPlugin.install = function (Vue, options) {
        // 1. add global method or property
        Vue.myGlobalMethod = function () {
            console.log('myGlobalMethod()')
        }

        // 2. add a global asset
        Vue.directive('my-directive', function (el, binding) {
            el.textContent = binding.value.toUpperCase()
        })

        // 3. inject some component options
        // Vue.mixin({
        //     created: function () {
        //         // some logic ...
        //     }
        //     ...
        // })

        // 4. add an instance method
        Vue.prototype.$myMethod = function (methodOptions) {
            console.log('$myMethod()')
        }
    }
    window.MyPlugin = MyPlugin
})()