<template>
  <p>{{ matieres }}</p>
</template>

<script>
export default {
  props: {
    matieres: { type: String, required: true },
  },
}
</script>
