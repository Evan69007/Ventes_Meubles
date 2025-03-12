<script setup>
import { ref } from 'vue'
import VDMMenu from '../Menu/VDMMenu.vue'
import VDMMenuButton from './VDMMenuButton.vue'
import Logo from './VDMLogo.vue'
import Icons from './VDMIcons.vue'

const isMenuOpen = ref(false)

const toggleMenu = () => {
  isMenuOpen.value = !isMenuOpen.value
}
</script>

<template>
  <nav class="navBar">
    <div class="item">
      <VDMMenuButton :isOpen="isMenuOpen" @click="toggleMenu" />
    </div>
    <div class="item"><Logo /></div>
    <div class="item"><Icons /></div>
  </nav>

  <!-- menu en dessous de la navbar -->
  <VDMMenu v-if="isMenuOpen" />
</template>

<style scoped>
.navBar {
  display: flex;
  width: 100vw;
  align-items: center;
  justify-content: space-between;
  font-family: 'Koulen', sans-serif;
  background-color: white;
  padding: 1rem 2rem;
  box-sizing: border-box;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 1000;
}

.item {
  flex: 1;
  display: flex;
  justify-content: center;
}

.item:first-child {
  justify-content: flex-start;
}

.item:last-child {
  justify-content: flex-end;
}
</style>
