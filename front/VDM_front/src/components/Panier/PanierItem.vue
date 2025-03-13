<!-- Représente chaque article avec contrôles de quantité -->
<script setup>
/* Importation du store panier qui contient la logique et les méthodes liées aux articles dans le panier. */
import { usePanierStore } from '@/stores/panierStore'

/* Définition des propriétés que ce composant attend. Chaque article du panier est passé en tant qu'objet.*/
const props = defineProps({
  item: {
    // Déclare une propriété appelée "item" pour représenter chaque article dans le panier.
    type: Object, // Le type de cette propriété est un objet.
    required: true, // Cette propriété est obligatoire pour le composant.
  },
})

/* Accès au store panier pour manipuler le panier global. */
const panierStore = usePanierStore()

/* Fonction pour augmenter la quantité de l'article dans le panier.*/
function incrementQuantity() {
  panierStore.updateQuantity(props.item.id, props.item.quantity + 1) // Met à jour la quantité de l'article dans le panier.
}

/* Fonction pour diminuer la quantité de l'article dans le panier, si la quantité est supérieure à 1. */
function decrementQuantity() {
  if (props.item.quantity > 1) {
    // Vérifie que la quantité est supérieure à 1 avant de la diminuer.
    panierStore.updateQuantity(props.item.id, props.item.quantity - 1) // Met à jour la quantité dans le panier.
  }
}

/*  Fonction pour supprimer un article du panier. */
function removeItem() {
  panierStore.removeItem(props.item.id) // Supprime l'article du panier à l'aide de son ID.
}
</script>

<template>
  <div class="flex items-center border-b pb-4">
    <!-- "flex-shrink-0" évite que l'image soit rétrécie. -->
    <div class="w-20 h-20 flex-shrink-0">
      <!-- L'image de l'article est liée à la source (src) dynamique, correspondant à la propriété "image" de l'article. -->
      <img :src="item.image" alt="item.name" class="w-full h-full object-cover rounded" />
    </div>

    <!-- Conteneur pour le nom et le prix de l'article. -->
    <div class="ml-4 flex-grow">
      <!-- Affiche le nom de l'article -->
      <h3 class="font-medium">{{ item.name }}</h3>
      <!-- Affiche le prix de l'article, formaté à 2 décimales avec le symbole euro. -->
      <p class="text-gray-600">{{ item.price.toFixed(2) }} €</p>
    </div>

    <!-- Zone pour gérer la quantité de l'article (boutons + et -). -->
    <div class="flex items-center ml-4">
      <!-- Bouton pour diminuer la quantité de l'article -->
      <button @click="decrementQuantity" class="px-2 py-1 bg-gray-200 rounded-l">-</button>
      <!-- Affichage de la quantité actuelle de l'article -->
      <span class="px-4 py-1 bg-gray-100">{{ item.quantity }}</span>
      <!-- Bouton pour augmenter la quantité de l'article -->
      <button @click="incrementQuantity" class="px-2 py-1 bg-gray-200 rounded-r">+</button>
    </div>
    <!-- Zone de droite pour afficher le prix total de cet article dans le panier et un bouton pour le supprimer -->
    <div class="ml-4 text-right">
      <!-- Affiche le prix total (prix unitaire * quantité) de cet article -->
      <p class="font-medium">{{ (item.price * item.quantity).toFixed(2) }} €</p>
      <!-- Bouton pour supprimer l'article du panier -->
      <button @click="removeItem" class="text-red-500 text-sm">Supprimer</button>
    </div>
  </div>
</template>
