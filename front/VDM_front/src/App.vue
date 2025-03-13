<script setup>
import { RouterView } from 'vue-router'
import NavBar from './components/NavBar/VDMNavBar.vue'
import FooterComponent from '@/components/Footer/FooterComponent.vue'
</script>
<template>
  <RouterView />
  <div class="app">
    <div class="pt-16">
      <header><NavBar /></header>
      <main class="container">
        <!-- Affiche la page en fonction de la route définie dans index.js -->
      </main>
      <footer>
        <FooterComponent />
      </footer>
    </div>
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
