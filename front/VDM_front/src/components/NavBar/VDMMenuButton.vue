<script setup>
import ArrowIcon from '../icons/IconArrow.vue'
</script>

<template>
  <div class="menu">
    <button><ArrowIcon /> MENU</button>
  </div>
</template>

<style scoped>
button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: none;
  border: none;
  color: black;
  font-size: xx-large;
  cursor: pointer;
  padding: 0;
  outline: none;
  align-content: center;
}
button:hover {
  opacity: 0.7;
}
</style>
