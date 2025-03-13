/* Store Pina gère:
L'ajout d'articles
La suppression d'articles
La mise à jour des quantités
Le calcul des sous-totaux, taxes et totaux
La persistance dans le localStorage */

import { defineStore } from 'pinia'

export const usePanierStore = defineStore('panier', {
  state: () => ({
    items: [],
  }),

  getters: {
    totalItems: (state) => state.items.reduce((total, item) => total + item.quantity, 0),

    subtotal: (state) =>
      state.items.reduce((total, item) => {
        return total + item.price * item.quantity
      }, 0),

    // taxAmount: (state) =>
    //   state.items.reduce((total, item) => {
    //     return total + item.price * item.quantity * 0.2 // TVA de 20%
    //   }, 0),

    total: (state) => {
      const subtotal = state.items.reduce((total, item) => {
        return total + item.price * item.quantity
      }, 0)
      const shipping = state.items.length > 0 ? 50.0 : 0 // Frais de livraison uniquement si le panier n'est pas vide
      return subtotal + shipping
    },

    isEmpty: (state) => state.items.length === 0,
  },

  actions: {
    addItem(product) {
      const existingItem = this.items.find((item) => item.id === product.id)

      if (existingItem) {
        existingItem.quantity += 1
      } else {
        this.items.push({
          id: product.id,
          name: product.name,
          price: product.price,
          image: product.image,
          quantity: 1,
        })
      }

      // Sauvegarder dans le localStorage
      this.saveToLocalStorage()
    },

    removeItem(productId) {
      const index = this.items.findIndex((item) => item.id === productId)
      if (index !== -1) {
        this.items.splice(index, 1)
        this.saveToLocalStorage()
      }
    },

    updateQuantity(productId, quantity) {
      const item = this.items.find((item) => item.id === productId)
      if (item) {
        item.quantity = quantity

        // Si la quantité est 0 ou moins, supprimer l'article
        if (item.quantity <= 0) {
          this.removeItem(productId)
        } else {
          this.saveToLocalStorage()
        }
      }
    },

    clearCart() {
      this.items = []
      this.saveToLocalStorage()
    },

    saveToLocalStorage() {
      localStorage.setItem('panier', JSON.stringify(this.items))
    },

    loadFromLocalStorage() {
      const storedItems = localStorage.getItem('panier')
      if (storedItems) {
        this.items = JSON.parse(storedItems)
      }
    },
  },
})
