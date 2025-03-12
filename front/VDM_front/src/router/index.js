// index.js = gère la navigation et définit la page à afficher (VDMHome.vue). Gestion des routes

import { createRouter, createWebHistory } from 'vue-router' // Import du routeur Vue
//import Home from '@/views/VDMHome.vue' // Import de la page d’accueil
import Detail from '@/views/DetailView.vue' // Import de la page Detail

const routes = [{ path: '/', component: Detail }] // Définition des routes ("/" → page d’accueil)
// Quand l’utilisateur va sur /, il voit VDMHome.vue.
const router = createRouter({
  history: createWebHistory(), // Utilisation de l’historique du navigateur
  routes, // Ajout des routes définies
})

export default router // Export du routeur pour qu’il soit utilisé dans main.js
©