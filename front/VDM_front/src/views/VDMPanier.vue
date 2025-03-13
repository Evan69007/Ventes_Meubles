<!-- La vue principale qui intègre tous les composants -->
<script setup>
/*Importation de la fonction onMounted de Vue. Exécute du code lorsque le composant est monté dans le DOM.  */
import { onMounted } from 'vue'
/* Importation des composants nécessaires à la vue principale du panier. */
import PanierList from '@/components/Panier/PanierList.vue' // Liste des produits dans le panier
import PanierSummary from '@/components/Panier/PanierSummary.vue' // Résumé du panier (prix total, etc.)
import PanierActions from '@/components/Panier/PanierActions.vue' // Actions possibles dans le panier (ajouter au panier, etc.)

/*Importation du store panier. Utilisé pour gérer l'état global du panier (les articles ajoutés, le total, etc.) */
import { usePanierStore } from '@/stores/panierStore'

// Initialisation du store panier pour l'utiliser dans ce composant
const panierStore = usePanierStore()

/* onMounted est une fonction qui s'exécute lorsque le composant est affiché à l'écran
  On appel la méthode loadFromLocalStorage du panierStore pour charger les données du panier depuis le stockage local du navigateur. */
onMounted(() => {
  panierStore.loadFromLocalStorage()
})
</script>

<template>
  <div class="container mx-auto p-4 mt-32">
    <h1 class="text-2xl font-bold mb-4">Votre Panier</h1>

    <!-- Contenu du panier -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-16">
      <div class="lg:col-span-2">
        <PanierList />
        <!-- Ce composant affiche les articles du panier -->
      </div>
      <div class="lg:col-span-1">
        <PanierSummary />
        <!-- Affiche le résumé du panier, par exemple le total -->
        <PanierActions />
        <!-- Affiche les actions disponibles, comme le paiement -->
      </div>
    </div>
  </div>
</template>
