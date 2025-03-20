<script setup>
import cardsContainer from '@/components/CardMeuble/cardsContainer.vue' // Import du composant contenant les produits
import Hero from '@/components/VDMHero.vue' // Import du composant contenant l'image Background
</script>

<template>
  <div>
    <main>
      <Hero />
      <h1>Nos meubles</h1>
      <p>Chaque article de maison que nous
      proposons est unique et soigneusement
      sélectionné pour enrichir votre intérieur
      avec une touche d'histoire et de caractère.</p>
      <cardsContainer />
      <!-- Affiche la liste des produits -->
    </main>
  </div>
</template>

<style scoped>
h1{
  margin-left: 1rem;
  font-family: 'Koulen', sans-serif;
  text-transform: uppercase;
  color: black;
  font-size: xx-large;
  text-align: left;
  margin-top: 2rem;


}

p{
  margin-left: 1rem;
  font-family: 'poppins', sans-serif;

  color: black;
  text-align: left;
  margin-top: 0.5rem;
  margin-bottom: 2rem;
}
</style>
