<script setup>
import ArrowIcon from '../icons/IconArrow.vue'
import ArrowIconUp from '../icons/IconArrowUp.vue'

// eslint-disable-next-line no-unused-vars
const props = defineProps({
  isOpen: Boolean,
})
</script>

<template>
  <button class="menu-button">
    <component :is="isOpen ? ArrowIconUp : ArrowIcon" />
    MENU
  </button>
</template>

<style scoped>
.menu-button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: none;
  border: none;
  color: black;
  font-size: x-large;
  cursor: pointer;
  padding: 0;
  outline: none;
  display: flex;
  align-items: center;
  gap: 8px;
}

.menu-button:hover {
  opacity: 0.7;
}
</style>
