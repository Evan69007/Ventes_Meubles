<!-- Contient les boutons d'action-->
<script setup>
/* Importation du store panier qui contient les données du panier et les méthodes associées. */
import { usePanierStore } from '@/stores/panierStore'
/* Importation de la fonction useRouter de Vue Router pour effectuer des redirections. */
import { useRouter } from 'vue-router'

/* Initialisation du store panier pour y accéder dans ce composant. */
const panierStore = usePanierStore()
/* Initialisation du routeur pour gérer les redirections de pages. */
const router = useRouter()

/* Fonction pour rediriger l'utilisateur vers la page d'accueil (ou la boutique). */
function continueShopping() {
  router.push('/') // Redirige vers la route '/' (page d'accueil)
}

/*  Fonction pour simuler le passage à la page de paiement. */
function checkout() {
  // À implémenter: redirection vers page de paiement
  alert('Redirection vers la page de paiement...')
}

/* Fonction pour vider le panier après une confirmation de l'utilisateur. */
function clearCart() {
  // Demande de confirmation avant de vider le panier.
  if (confirm('Êtes-vous sûr de vouloir vider votre panier ?')) {
    panierStore.clearCart() // Efface les articles du panier via le store
  }
}
</script>

<template>
  <div class="bg-white rounded-lg shadow p-4">
    <!-- Bouton de validation du paiement, qui appelle la fonction checkout lorsqu'on clique dessus. -->
    <!-- Si le panier est vide, le bouton est désactivé -->
    <button
      @click="checkout"
      class="w-full bg-black text-white py-2 rounded mb-2 font-medium"
      :disabled="panierStore.isEmpty"
    >
      Valider le paiement
    </button>
    <!-- Bouton pour continuer les achats, qui appelle la fonction continueShopping. -->
    <button @click="continueShopping" class="w-full bg-gray-200 py-2 rounded mb-2">
      Continuer les achats
    </button>

    <!-- Bouton pour vider le panier, qui n'apparaît que si le panier n'est pas vide. -->
    <button
      v-if="!panierStore.isEmpty"
      @click="clearCart"
      class="w-full text-red-500 py-2 rounded text-sm"
    >
      Vider mon panier
    </button>
  </div>
</template>
