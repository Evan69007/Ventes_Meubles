<!-- Affiche la liste des articles-->
<script setup>
// Importation du composant `PanierItem`, qui représente un article individuel dans le panier.
import PanierItem from './PanierItem.vue'

// Importation du store du panier pour accéder aux données et méthodes du panier.
import { usePanierStore } from '@/stores/panierStore'

// Création d'une instance du store panier pour pouvoir l'utiliser dans le composant.
const panierStore = usePanierStore()
</script>

<template>
  <!-- Conteneur principal avec un fond blanc, bords arrondis et ombre pour un effet de carte. -->
  <div class="bg-white rounded-lg shadow p-4">
    <!-- Titre du panier -->
    <h2 class="text-xl font-semibold mb-4">Articles dans votre panier</h2>

    <!-- Si le panier est vide, afficher un message -->
    <div v-if="panierStore.isEmpty" class="text-center py-8">
      <p class="text-gray-500">Votre panier est vide</p>
    </div>

    <!-- Si le panier contient des articles, les afficher sous forme de liste -->
    <div v-else class="space-y-4">
      <!-- Boucle sur les articles du panier et affiche un composant `PanierItem` pour chaque article -->
      <!-- Boucle sur chaque élément du panier 
       Associe une clé unique à chaque article pour optimiser le rendu
       Passe l'objet article en tant que prop au composant `PanierItem`-->
      <PanierItem v-for="item in panierStore.items" :key="item.id" :item="item" />
    </div>
  </div>
</template>
