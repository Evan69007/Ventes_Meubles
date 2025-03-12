<script setup>
//import { RouterLink, RouterView } from 'vue-router'
import navBar from './components/NavBar/VDMNavBar.vue'
</script>

<template>
  <header>
    <navBar />
    <!-- <nav>
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/about">About</RouterLink>
    </nav> -->
  </header>

  <RouterView />
</template>

<style scoped></style>
