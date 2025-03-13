<template>
  <p>Description : {{ description }}</p>
</template>

<script>
export default {
  props: {
    description: { type: String, required: true },
  },
};
</script>
