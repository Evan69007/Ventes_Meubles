<template>
  <p>Couleurs : {{ couleurs }}</p>
</template>

<script>
export default {
  props: {
    couleurs: { type: String, required: true },
  },
};
</script>
