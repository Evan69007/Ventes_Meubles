<script setup>
import MenuButton from './VDMMenuButton.vue'
import Logo from './VDMLogo.vue'
import Icons from './VDMIcons.vue'
</script>

<template>
  <nav class="navBar">
    <div class="item"><MenuButton /></div>
    <div class="item"><Logo /></div>
    <div class="item"><Icons /></div>
  </nav>
</template>

<style scoped>
.navBar {
  display: flex;
  width: 100vw; /* S'assurer qu'elle prend toute la largeur */
  align-items: center;
  justify-content: space-between;
  font-family: 'Koulen', sans-serif;
  background-color: white;
  padding: 1rem 2rem;
  box-sizing: border-box; /* Empêcher le padding d'augmenter la largeur */
  position: fixed; /* S'assurer qu'elle reste en haut */
  top: 0;
  left: 0;
  z-index: 1000; /* S'assurer qu'elle passe au-dessus du reste */
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
