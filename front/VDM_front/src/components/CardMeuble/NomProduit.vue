<template>
  <h3 class="text-lg font-semibold mt-2 text-center">
    {{ nom }}
  </h3>
</template>

<script>
export default {
  props: {
    nom: { type: String, required: true },
  },
};
</script>

