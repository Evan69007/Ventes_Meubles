<!-- Représente chaque article avec contrôles de quantité -->
<script setup>
import { usePanierStore } from '@/stores/panierStore'

const props = defineProps({
  item: {
    type: Object,
    required: true,
  },
})

const panierStore = usePanierStore()

function incrementQuantity() {
  panierStore.updateQuantity(props.item.id, props.item.quantity + 1)
}

function decrementQuantity() {
  if (props.item.quantity > 1) {
    panierStore.updateQuantity(props.item.id, props.item.quantity - 1)
  }
}

function removeItem() {
  panierStore.removeItem(props.item.id)
}
</script>

<template>
  <div class="flex items-center border-b pb-4">
    <div class="w-20 h-20 flex-shrink-0">
      <img :src="item.image" alt="item.name" class="w-full h-full object-cover rounded" />
    </div>

    <div class="ml-4 flex-grow">
      <h3 class="font-medium">{{ item.name }}</h3>
      <p class="text-gray-600">{{ item.price.toFixed(2) }} €</p>
    </div>

    <div class="flex items-center ml-4">
      <button @click="decrementQuantity" class="px-2 py-1 bg-gray-200 rounded-l">-</button>
      <span class="px-4 py-1 bg-gray-100">{{ item.quantity }}</span>
      <button @click="incrementQuantity" class="px-2 py-1 bg-gray-200 rounded-r">+</button>
    </div>

    <div class="ml-4 text-right">
      <p class="font-medium">{{ (item.price * item.quantity).toFixed(2) }} €</p>
      <button @click="removeItem" class="text-red-500 text-sm">Supprimer</button>
    </div>
  </div>
</template>
