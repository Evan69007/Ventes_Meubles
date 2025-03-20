<script setup>
import StockTable from '@/components/GestionStock/StockTable.vue'
</script>

<template>
  <div class="stock-view">
    <h1 class="title">Gestion du Stock</h1>
    <router-link to="/ajout-meuble/" class="button"><CartIcon />Ajouter un Meuble</router-link>
    <StockTable />
  </div>
</template>

<style scoped>
.stock-view {
  margin-top: 6rem;
  padding: 2rem;
}
.title {
  margin-bottom: 1.5rem;
  font-size: 1.8rem;
  font-weight: bold;
  font-family: 'Koulen';
}
button,.button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: white;
  border: 1px solid black;
  border-radius: 8px;
  color: black;
  font-size: large;
  cursor: pointer;
  padding: 4px 8px;
  outline: none;
  align-items: center;
  gap: 8px;
  transition:
    background 0.3s,
    opacity 0.3s;
}

button:hover {
  background: gray;
  opacity: 0.8;
}
</style>
