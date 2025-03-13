<template>
  <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <cardsProduit
      v-for="produit in produits"
      :key="produit.id"
      :produit="produit"
      @add-to-cart="$emit('add-to-cart', produit.id)"
    />
  </div>
</template>

<script>
import cardsProduit from '@/components/CardMeuble/cardsProduit.vue' // Composant carte produit

export default {
  components: {
    cardsProduit,
  },
  data() {
    return {
      produits: [],
    }
  },
  async mounted() {
    try {
      const response = await fetch('/meubles_anciens.json') // JSON depuis public
      this.produits = await response.json()
    } catch (error) {
      console.error('Erreur de chargement :', error)
    }
  },
}
</script>
