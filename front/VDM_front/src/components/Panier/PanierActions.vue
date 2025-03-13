<!-- Contient les boutons d'action-->
<script setup>
import { usePanierStore } from '@/stores/panierStore'
import { useRouter } from 'vue-router'

const panierStore = usePanierStore()
const router = useRouter()

function continueShopping() {
  router.push('/')
}

function checkout() {
  // À implémenter: redirection vers page de paiement
  alert('Redirection vers la page de paiement...')
}

function clearCart() {
  if (confirm('Êtes-vous sûr de vouloir vider votre panier ?')) {
    panierStore.clearCart()
  }
}
</script>

<template>
  <div class="bg-white rounded-lg shadow p-4">
    <button
      @click="checkout"
      class="w-full bg-blue-600 text-white py-2 rounded mb-2 font-medium"
      :disabled="panierStore.isEmpty"
    >
      Valider le paiement
    </button>

    <button @click="continueShopping" class="w-full bg-gray-200 py-2 rounded mb-2">
      Continuer les achats
    </button>

    <button
      v-if="!panierStore.isEmpty"
      @click="clearCart"
      class="w-full text-red-500 py-2 rounded text-sm"
    >
      Vider mon panier
    </button>
  </div>
</template>
