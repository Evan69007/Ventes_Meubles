<script setup>
import cardsContainer from '@/components/CardMeuble/cardsContainer.vue' // Import du composant contenant les produits
import Hero from '@/components/VDMHero.vue' // Import du composant contenant l'image Background
import FooterComponent from '@/components/FooterComponent.vue'
</script>

<template>
  <div>
    <main>
      <Hero />
      <h1>Bienvenue sur notre boutique</h1>
      <cardsContainer />
      <!-- Affiche la liste des produits -->
    </main>
    <footer>
      <FooterComponent />
    </footer>
  </div>
</template>
