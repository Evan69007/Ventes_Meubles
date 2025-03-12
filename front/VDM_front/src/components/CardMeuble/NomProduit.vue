<!-- Ce composant affiche un <h3> contenant le nom du produit. -->

<template>
  <h3 class="text-lg font-semibold mt-2 text-center">
    {{ name }}
  </h3>
</template>

<script>
/* 
 Il reçoit une prop name, qui correspond au nom du produit. */
export default {
  props: {
    name: { type: String, required: true }, // Le nom du produit est obligatoire
  },
}
</script>
