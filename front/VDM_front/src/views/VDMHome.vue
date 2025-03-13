<script setup>
import cardsContainer from '@/components/CardMeuble/cardsContainer.vue' // Import du composant contenant les produits
import Hero from '@/components/VDMHero.vue' // Import du composant contenant l'image Background
</script>

<template>
  <div>
    <main>
      <Hero />
      <h1>Bienvenue sur notre boutique</h1>
      <cardsContainer />
      <!-- Affiche la liste des produits -->
    </main>
  </div>
</template>
