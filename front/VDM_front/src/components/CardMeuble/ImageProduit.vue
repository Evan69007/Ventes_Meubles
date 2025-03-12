<template>
  <!-- Si linkable est true, l’image est cliquable et redirige vers la page du produit (/product/{id}).
       Utilisation de router-link (fourni par Vue Router) pour la navigation interne. -->
  <router-link v-if="linkable" :to="'/product/' + productId">
    <img
      :src="src"
      :alt="alt"
      class="w-full h-60 object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out"
    />
  </router-link>
  <!-- Si linkable est false, l’image s’affiche sans lien.
      Même style que l’image cliquable. -->
  <img
    v-else
    :src="src"
    :alt="alt"
    class="w-full h-60 object-cover transform hover:scale-110 transition-transform duration-300 ease-in-out"
  />
</template>

<script>
/* Liste des props (valeurs passées depuis cardsProduit.vue)
src → Lien de l’image (ex: "https://exemple.com/image.jpg").
alt → Texte alternatif affiché si l’image ne charge pas.
productId → ID du produit (nécessaire pour générer le lien).
linkable → Si true, l’image est cliquable (redirige vers la page du produit). */
export default {
  props: {
    src: { type: String, required: true },
    alt: { type: String, default: 'Image Produit' },
    productId: { type: [Number, String], default: null },
    linkable: { type: Boolean, default: true },
  },
}
</script>
