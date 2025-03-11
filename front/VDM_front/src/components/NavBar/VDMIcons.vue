<script setup>
import UserIcon from '../icons/IconUser.vue'
import CartIcon from '../icons/IconCart.vue'
</script>

<template>
  <div class="icons">
    <button><UserIcon /> Mon compte</button>
    <button><CartIcon /> Mon panier</button>
  </div>
</template>

<style>
.icons {
  display: flex;
  flex-direction: row;
  gap: 2em;
}

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
