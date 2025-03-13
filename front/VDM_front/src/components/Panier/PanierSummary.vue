<!-- Affiche le résumé de la commande avec les totaux -->
<script setup>
// Importation du store du panier pour accéder aux données et méthodes du panier.
import { usePanierStore } from '@/stores/panierStore'

// Création d'une instance du store panier pour pouvoir l'utiliser dans le composant.
const panierStore = usePanierStore()
</script>

<template>
  <!-- Conteneur principal avec un fond blanc, bords arrondis, ombre et un padding -->
  <div class="bg-white rounded-lg shadow p-4 mb-4">
    <!-- Titre du résumé de la commande -->
    <h2 class="text-xl font-semibold mb-4">Résumé de la commande</h2>

    <!-- Section contenant les détails du résumé -->
    <div class="space-y-2">
      <!-- Affichage du sous-total (prix total hors frais de livraison) -->
      <div class="flex justify-between">
        <span>Sous-total ({{ panierStore.totalItems }} articles)</span>
        <span>{{ panierStore.subtotal.toFixed(2) }} €</span>
      </div>

      <!-- Affichage du coût de la livraison (fixé ici à 50 €) -->
      <div class="flex justify-between">
        <span>Livraison</span>
        <span>50.00 €</span>
      </div>

      <!-- Ligne de séparation -->
      <div class="border-t my-2"></div>

      <!-- Affichage du total TTC (sous-total + livraison) en gras -->
      <div class="flex justify-between font-bold">
        <span>Total TTC</span>
        <span>{{ panierStore.total.toFixed(2) }} €</span>
      </div>
    </div>
  </div>
</template>
