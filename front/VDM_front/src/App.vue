<script setup>
import { RouterView } from 'vue-router'
import NavBar from './components/NavBar/VDMNavBar.vue'
</script>
<template>
  <RouterView />
  <div class="app">
    <header><NavBar /></header>
    <main class="container">
      <!-- Affiche la page en fonction de la route définie dans index.js -->
    </main>
  </div>
</template>

<style scoped>
.app {
  display: flex;
  flex-direction: column;
  min-height: 100vh; /* Fait en sorte que l’application prenne toute la hauteur */
}

.container {
  flex: 1;
  padding: 20px;
}
</style>
