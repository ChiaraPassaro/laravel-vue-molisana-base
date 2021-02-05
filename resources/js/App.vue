<template>
  <div>
    <nav>
      <ul>
        <li><router-link :to="{ name: 'home'}">Home</router-link></li>
        <li><router-link :to="{ name: 'about'}">About</router-link></li>
        <li><router-link :to="{ name: 'products'}">Products</router-link></li>
      </ul>
    </nav>
    <router-view />
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>