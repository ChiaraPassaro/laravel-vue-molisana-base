<template>
  <div class="card">
    <h2>{{ title }}</h2>
    <h3>{{ shape }}</h3>
    <div>{{ description }}</div>
  </div>  
</template>

<script>
export default {
  name: "Card",
  props: ["title", "shape", "description"]
}
</script>

<style>

</style>