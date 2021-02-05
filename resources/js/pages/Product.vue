<template>
     <Card 
      :key="index" :title="product.title" :description="product.description" :shape="shape_id" />
</template>

<script>
import Card from "../components/Card.vue";

export default {
  name: "Product",
  components: {
    Card
  },
  data() {
    return {
      product: []
    }
  },
  mounted() {
    // console.log(this.$route.params.id);
    axios.get(`http://127.0.0.1:8001/api/products/${this.$route.params.id}`).then((result) => {
      this.product = result.data.result;
    }).catch((err) => {
      
    });
  }
}
</script>

<style lang="scss">
  .product {
    
  }
</style>