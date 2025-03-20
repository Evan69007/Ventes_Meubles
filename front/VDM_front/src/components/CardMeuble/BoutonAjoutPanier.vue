<template>
  <button
    class=" flex justify-center border px-4 py-2 mt-2 w-full items-center" style="font-family: poppins; font-weight: normal; font-size:medium; border: 1px solid black;"
    @click="handleClick"
  >
    {{ text }}
  </button>
</template>

<script>
/* Explication des props
    text
    ➝ Permet de personnaliser le texte du bouton (ex: "Acheter maintenant").
    ➝ Si aucun texte n'est donné, il affiche "Ajouter au panier" par défaut.
    productId
    ➝ Contient l’ID du produit associé au bouton.
    ➝ Obligatoire (required: true), car il est essentiel pour identifier le produit ajouté au panier. */
export default {
  props: {
    text: {
      type: String,
      default: 'Ajouter au panier',
    },
    productId: {
      type: [Number, String],
      required: true,
    },
  },

  /* methods: handleClick()= Quand on clique sur le bouton :
➝ this.$emit('ajout-au-panier', this.productId) déclenche l’événement "ajout-au-panier".
➝ Transmet productId au parent (cardsProduit.vue). */
  methods: {
    handleClick() {
      this.$emit('ajout-au-panier', this.productId)
    },
  },
}
</script>
