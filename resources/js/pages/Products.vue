<template>
  <div class="products">
    <!-- <Card 
      v-for="(product, index) in products" :key="index" :title="product.title" :description="product.description" :shape="shape_id" /> -->
      <router-link v-for="(product, index) in products" :key="index" :to="{ name: 'product', params: { id: product.id }}" > {{product.title}} </router-link>
  </div>
</template>

<script>
import Card from  "../components/Card.vue";
export default {
  name: "Products",
  components: {
    Card
  },
  data() {
    return {
      products: []
    }
  },
  mounted() {
    axios.get('http://127.0.0.1:8001/api/products').then((result) => {
      // console.log(result);
      this.products = result.data.result;
    }).catch((err) => {
      console.error(err);
    });
  }
}
</script>

<style>

</style>