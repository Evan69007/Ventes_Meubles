<!-- cardsContainer.vue affiche toutes les cartes produits en utilisant cardsProduit.vue -->

<template>
  <div class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <!-- Boucle sur la liste des produits et affiche un composant cardsProduit pour chaque produit -->
    <!--  :produit="produit" → Passe les données du produit au composant cardsProduit.vue.
       @add-to-cart="handleAddToCart" → Écoute l’événement "add-to-cart" émis par cardsProduit.vue et appelle la méthode handleAddToCart. -->
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
  components: { cardsProduit },
  data() {
    return {
      produits: [
        {
          id: 1,
          name: 'Leto Steel & White Leather Chair',
          price: 575,
          image: new URL('@/assets/empty-modern-room-with-furniture.jpg', import.meta.url).href,
        },

        {
          id: 2,
          name: 'AM-QA Steel Bed Frame',
          price: 7000,
          image: new URL('@/assets/wooden-sideboard-table-with-books-vase.jpg', import.meta.url)
            .href,
        },
        {
          id: 3,
          name: 'Evermint Table Lamp',
          price: 220,
          image: new URL(
            '@/assets/picture-frame-with-abstract-art-by-pink-velvet-armchair.jpg',
            import.meta.url,
          ).href,
        },
        {
          id: 4,
          name: 'Giovanni Offredi Saporiti Table',
          price: 400,
          image: new URL(
            '@/assets/grey-comfortable-armchair-isolated-white-background.jpg',
            import.meta.url,
          ).href,
        },
        {
          id: 5,
          name: 'Amha Factory Steel & Leather Chair',
          price: 165,
          image: new URL('@/assets/modern-styled-small-entryway.jpg', import.meta.url).href,
        },
        {
          id: 6,
          name: 'Brigadier Sofa by Cini Boeri',
          price: 9000,
          image: new URL(
            '@/assets/scandinavian-vintage-wood-cabinet-with-chair-by-dark-blue-wall.jpg',
            import.meta.url,
          ).href,
        },
      ],
    }
  },

  /* handleAddToCart(productId)
➝ Est appelée lorsque cardsProduit.vue émet l’événement "add-to-cart".
➝ Affiche un message dans la console.
➝ Transmet l’événement au parent avec this.$emit('add-to-cart', productId). */
  methods: {
    handleAddToCart(productId) {
      console.log(`Produit ${productId} ajouté au panier`)
      this.$emit('add-to-cart', productId)
    },
  },
}
</script>
