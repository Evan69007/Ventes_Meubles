<!-- App.vue = est le composant principal, il affiche les pages en fonction des routes définies. Composant racine de l'application -->

<script setup>
import { RouterView } from 'vue-router' // Permet d'afficher la page actuelle
import NavBar from './components/NavBar/VDMNavBar.vue'
</script>

<template>
  <div class="app">
    <header><NavBar /></header>
    <main class="container">
      <RouterView />
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
