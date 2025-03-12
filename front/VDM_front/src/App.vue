<script setup>
import { RouterLink, RouterView } from 'vue-router'
import FooterComponent from './components/FooterComponent.vue'
</script>

<template>
  <footer>
    <div  >
      <FooterComponent />
      <nav>
        <RouterLink to="/">Home</RouterLink>
        <RouterLink to="/about">About</RouterLink>
      </nav>
    </div>
  </footer>

  <RouterView />
</template>

<style scoped>

</style>
