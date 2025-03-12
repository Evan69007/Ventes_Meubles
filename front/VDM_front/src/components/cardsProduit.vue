<!-- Ce composant affiche un seul produit sous forme de carte. -->

<template>
  <div class="border p-4 flex flex-col items-center">
    <!-- Composant pour afficher l'image -->
    <ImageProduit :src="produit.image" :alt="produit.name" :productId="produit.id" />

    <!-- Composant pour afficher le nom du produit -->
    <NomProduit :name="produit.name" />

    <!-- Affichage du prix -->
    <p class="text-gray-500">{{ produit.price }} €</p>

    <!-- Composant bouton ajouter au panier -->
    <BoutonAjouterPanier
      :productId="produit.id"
      @ajout-au-panier="$emit('add-to-cart', produit.id)"
    />
  </div>
</template>

<script>
import ImageProduit from '@/components/ImageProduit.vue'
import NomProduit from '@/components/NomProduit.vue'
import BoutonAjouterPanier from '@/components/BoutonAjoutPanier.vue'

export default {
  components: {
    ImageProduit,
    NomProduit,
    BoutonAjouterPanier,
  },
  props: {
    produit: Object, // Le produit est passé en tant que prop
  },
}
</script>
