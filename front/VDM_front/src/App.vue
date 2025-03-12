<script setup>
import { ref, computed } from 'vue'
import { RouterLink, RouterView } from 'vue-router'
// npm install vue-router

import VDMHome from '@/views/VDMHome.vue'
import VDMDetail from '@/views/VDMDetail.vue'
import VDMPanier from '@/views/VDMPanier.vue'

const routes = {
  '/': VDMHome,
  '/detail': VDMDetail,
  '/panier': VDMPanier
}

const currentPath = ref(window.location.hash)

window.addEventListener('hashchange', () => {
  currentPath.value = window.location.hash
})

const currentView = computed(() => {
  return routes[currentPath.value.slice(1) || '/'] || NotFound
})
</script>

<template>
  <nav>
    <RouterLink to="/">Home</RouterLink> |
    <RouterLink to="/detail">Detail</RouterLink> |
    <RouterLink to="/panier">Panier</RouterLink>
  </nav>

  <RouterView />
</template>