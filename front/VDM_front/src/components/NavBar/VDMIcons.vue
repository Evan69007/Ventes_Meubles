<script setup>
import UserIcon from '../icons/IconUser.vue'
import CartIcon from '../icons/IconCart.vue'
</script>

<template>
  <div class="icons">

    <router-link to="/stock" class="button"><CartIcon /> Stock</router-link>
    <router-link to="/panier" class="button"><CartIcon /> Mon panier</router-link>
    <router-link to="/compte" class="button"><UserIcon /> Mon compte</router-link>
    <router-link to="/connexion" class="button"><UserIcon /> Deconnexion</router-link>
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
  font-size: x-large;
  cursor: pointer;
  padding: 0;
  outline: none;
  display: flex;
  align-items: center;
  gap: 8px;
  
}

button:hover,
.button:hover {
  opacity: 0.7;
  text-decoration: underline;
  text-decoration-thickness: 2px;
  text-underline-offset: 3px;
  transform: scale(1.1);
  text-decoration-color: grey;
  

}
</style>
