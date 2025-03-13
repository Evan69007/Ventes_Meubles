<template>
  <p>{{ type }}</p>
</template>

<script>
export default {
  props: {
    type: { type: String, required: true },
  },
}
</script>
