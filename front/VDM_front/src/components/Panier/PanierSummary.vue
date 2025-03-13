<!-- Affiche le résumé de la commande avec les totaux -->
<script setup>
import { usePanierStore } from '@/stores/panierStore'

const panierStore = usePanierStore()
</script>

<template>
  <div class="bg-white rounded-lg shadow p-4 mb-4">
    <h2 class="text-xl font-semibold mb-4">Résumé de la commande</h2>

    <div class="space-y-2">
      <div class="flex justify-between">
        <span>Sous-total ({{ panierStore.totalItems }} articles)</span>
        <span>{{ panierStore.subtotal.toFixed(2) }} €</span>
      </div>
      <div class="flex justify-between">
        <span>Livraison</span>
        <span>50.00 €</span>
      </div>
      <div class="border-t my-2"></div>

      <div class="flex justify-between font-bold">
        <span>Total TTC</span>
        <span>{{ panierStore.total.toFixed(2) }} €</span>
      </div>
    </div>
  </div>
</template>
