<template>
  <div>Prix : {{ prix }} €</div>
</template>

<script>
export default {
  props: {
    prix: { type: [String, Number], required: true },
  },
};
</script>
