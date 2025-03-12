<template>
  <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <cardsProduit
      v-for="produit in produits"
      :key="produit.id"
      :produit="produit"
      @add-to-cart="handleAddToCart"
    />
  </div>
</template>

<script>
import cardsProduit from '@/components/cardsProduit.vue' // Import du composant carte produit

export default {
  components: {
    cardsProduit,
  },
  data() {
    return {
      produits: [],
    };
  },
  async mounted() {
    try {
      const response = await fetch("/meubles_anciens.json"); // Charge le JSON depuis `public`
      const data = await response.json();
      this.produits = data; // Mise à jour avec le format correct (liste directe)
    } catch (error) {
      console.error("Erreur lors de la récupération des meubles :", error);
    }
  },
  methods: {
    handleAddToCart(produitId) {
      console.log(`Produit ${produitId} ajouté au panier`);
      this.$emit("add-to-cart", produitId);
    },
  },
};
</script>


