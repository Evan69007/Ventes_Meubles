<template>
  <div class="border p-4 flex flex-col items-center">
    <ImageProduit
      :src="produit.photos_meuble?.principale"
      :alt="produit.nom"
      :productId="produit.id"
      :linkable="true"
    />

    <div class="w-full mt-2" style="display: flex; justify-content: space-between; align-items: center;">
      <NomProduit 
        :nom="produit.nom" 
        style="font-family: poppins; text-transform: uppercase; max-width: 70%; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;"
      />
      <p style="font-family: poppins; font-weight: normal; white-space: nowrap; margin-left: auto;">
        {{ produit.prix_ttc }} €
      </p>
    </div>

    <BoutonAjouterPanier
      :productId="produit.id"
      @ajout-au-panier="$emit('add-to-cart', produit.id)"
      class="mt-2"
    />
  </div>
</template>

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