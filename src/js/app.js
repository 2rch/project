window.Vue = require('vue')

Vue.component('product', require('./components/product.vue').default)
Vue.component('products', require("./components/products.vue").default)

const app = new Vue({
    el: '#app',
})