<template>
  <p>Dimensions : {{ hauteur }}cm x {{ largeur }}cm x {{ profondeur }}cm</p>
</template>

<script>
export default {
  props: {
    hauteur: { type: Number, required: true },
    largeur: { type: Number, required: true },
    profondeur: { type: Number, required: true },
  },
};
</script>
