/* Store Pina gère:
L'ajout d'articles
La suppression d'articles
La mise à jour des quantités
Le calcul des sous-totaux, taxes et totaux
La persistance dans le localStorage */

/* importation du store pinia permet de créer un store global. */
import { defineStore } from 'pinia'

/* Déclare un store nommé panier.
  Il pourra être utilisé dans n'importe quel composant avec usePanierStore(). */
export const usePanierStore = defineStore('panier', {
  state: () => ({
    //Définit l'état du panier sous forme d'une fonction qui retourne un objet.
    items: [], //items est un tableau qui contiendra les articles ajoutés au panier.
  }),

  getters: {
    //Les getters permettent de calculer des valeurs dérivées des données du store.
    totalItems: (state) => state.items.reduce((total, item) => total + item.quantity, 0), //Calcule le nombre total d'articles dans le panier en additionnant toutes les quantités.

    subtotal: (
      state, //Calcule le sous-total du panier en multipliant le prix de chaque article par sa quantité.
    ) =>
      state.items.reduce((total, item) => {
        return total + item.price * item.quantity
      }, 0),

    total: (state) => {
      //Calcule le total TTC, en ajoutant les frais de livraison (50€ si le panier n'est pas vide, sinon 0€).
      const subtotal = state.items.reduce((total, item) => {
        return total + item.price * item.quantity
      }, 0)
      const shipping = state.items.length > 0 ? 50.0 : 0 // Frais de livraison uniquement si le panier n'est pas vide
      return subtotal + shipping
    },

    isEmpty: (state) => state.items.length === 0, //Renvoie true si le panier est vide, sinon false.
  },

  actions: {
    /* Ajoute un produit au panier :
    Vérifie si l'article est déjà présent.
    Si oui, incrémente la quantité.
    Sinon, ajoute un nouvel objet au tableau items.
    Enfin, sauvegarde dans le localStorage. */
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

    /* supprime un article du panier en trouvant son index et en le retirant du tableau. */
    removeItem(productId) {
      const index = this.items.findIndex((item) => item.id === productId)
      if (index !== -1) {
        this.items.splice(index, 1)
        this.saveToLocalStorage()
      }
    },

    /* Modifie la quantité d'un article en trouvant son id.
        Si la quantité devient 0, l'article est supprimé. */
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

    // Réinitialise le panier en mettant items à un tableau vide.
    clearCart() {
      this.items = []
      this.saveToLocalStorage()
    },

    /* Convertit items en JSON et le stocke dans localStorage sous la clé panier. */
    saveToLocalStorage() {
      localStorage.setItem('panier', JSON.stringify(this.items))
    },

    /*  Vérifie si des données du panier sont stockées et les charge dans items. */
    loadFromLocalStorage() {
      const storedItems = localStorage.getItem('panier')
      if (storedItems) {
        this.items = JSON.parse(storedItems)
      }
    },
  },
})

/* STATE:	Stocke la liste des articles
 GETTERS:	Calcule le nombre d'articles, le total et le sous-total
 ACTIONS:	Ajoute, met à jour, supprime des articles et gère le stockage local */
