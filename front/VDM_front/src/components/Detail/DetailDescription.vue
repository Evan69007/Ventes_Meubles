<template>
  <p>{{ description }}</p>
</template>

<script>
export default {
  props: {
    description: { type: String, required: true },
  },
}
</script>
