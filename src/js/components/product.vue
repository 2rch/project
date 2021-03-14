<template>
  <li>
    <div class="...">
      <div class="..."> {{title}}</div>
      <div class="..."> <a :href="`product/${id}`"><img :src="img" :alt="id"> </a> </div>
      <div class="..."> {{description}}</div>
      <div class="..."> {{price}} $</div>
      <div class="..."> В категории {{category}}</div>
      <div v-if="status" class="..."> В наличии </div>
      <div v-else class="..."> Нет в наличии </div>
      <form action="catalog/addProduct" method="post" class="...">
        <button class="..." type="submit" name="addWish" :value="id"> В избранное </button>
        <button class="..." type="submit" name="addCart" :value="id"> В корзину </button>
      </form>
    </div>
  </li>
</template>

<script>
export default {
  name: 'product',
  props: {
    id: {
      type: Number,
      require: true
    },
    title: {
      type: String,
      require: true
    },
    img: {
      type: String
    },
    description: {
      type: String
    },
    status: {
      type: Boolean,
      require: true
    },
    price: {
      type: Number,
      reuqire: true
    },
    category: {
      type: String,
      require: true
    }
  }
}
</script>

<style lang="scss">
.test {
  color: red;
}
</style>
