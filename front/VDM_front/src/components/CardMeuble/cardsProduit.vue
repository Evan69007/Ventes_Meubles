<script>
import ImageProduit from '@/components/CardMeuble/ImageProduit.vue'
import NomProduit from '@/components/CardMeuble/NomProduit.vue'
import BoutonAjouterPanier from '@/components/CardMeuble/BoutonAjoutPanier.vue'

export default {
  components: {
    ImageProduit,
    NomProduit,
    BoutonAjouterPanier,
  },
  props: {
    produit: {
      type: Object,
      required: true,
    },
  },
}
</script>
<template>
  <div class="border p-4 flex flex-col items-center">
    <ImageProduit
      :src="produit.photos_meuble?.principale"
      :alt="produit.nom"
      :productId="produit.id"
      :linkable="true"
    />

    <NomProduit :nom="produit.nom" />

    <p class="text-gray-500">{{ produit.prix_ttc }} €</p>
    <p class="text-sm text-gray-400">{{ produit.type }} - {{ produit.etat }}</p>

    <BoutonAjouterPanier
      :productId="produit.id"
      @ajout-au-panier="$emit('add-to-cart', produit.id)"
    />
  </div>
</template>





