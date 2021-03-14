<template>
  <div>
  <product v-for="(product, index) in data"
           :key = "product.id"
           :id = "product.id"
           :title = "product.title"
           :img = "product.img"
           :description = "product.description"
           :status = "product.status"
           :price = "product.price"
           :category = "product.category"
           ></product>
  </div>
</template>

<script>
export default {
  name: 'products',
  data() {
    return {
      data: []
    }
  },
  mounted() {
    fetch('http://site.test/products.json')
        .then(response => response.json())
        .then(json=> {
          this.data = json
        })
  },
}
</script>

<style lang="scss">
.test {
  color: red;
}
</style>
