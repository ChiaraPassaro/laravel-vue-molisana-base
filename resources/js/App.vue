<template>
  <div>
      <router-link :to="{ name: 'home'}">Home</router-link>
      <router-link :to="{ name: 'about'}">About</router-link>

      <router-view />
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>