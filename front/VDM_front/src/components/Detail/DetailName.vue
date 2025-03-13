<template>
  <h1>{{ nom }}</h1>
</template>

<script>
export default {
  props: {
    nom: { type: String, required: true },
  },
}
</script>
