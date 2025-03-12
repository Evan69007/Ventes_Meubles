<script setup>
import { RouterLink, RouterView } from 'vue-router'
</script>

<template>
  <nav>
    <RouterLink to="/">Home</RouterLink> |
    <RouterLink to="/detail">Detail</RouterLink> |
    <RouterLink to="/panier">Panier</RouterLink>
  </nav>

  <RouterView />
</template>
