<!-- components/Panier/PanierList.vue -->
<script setup>
import PanierItem from './PanierItem.vue'
import { usePanierStore } from '@/stores/panierStore'

const panierStore = usePanierStore()
</script>

<template>
  <div class="bg-white rounded-lg shadow p-4">
    <h2 class="text-xl font-semibold mb-4">Articles dans votre panier</h2>

    <div v-if="panierStore.isEmpty" class="text-center py-8">
      <p class="text-gray-500">Votre panier est vide</p>
    </div>

    <div v-else class="space-y-4">
      <PanierItem v-for="item in panierStore.items" :key="item.id" :item="item" />
    </div>
  </div>
</template>
