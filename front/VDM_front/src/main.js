//main.js: initialise l’application Vue, charge le routeur (point d'entrée de l'application)

import './assets/main.css' // Import du fichier CSS global pour les styles

import { createApp } from 'vue' // Import de Vue
import { createPinia } from 'pinia' // Import de Pinia (gestion d’état)

import App from './App.vue' // Import du composant racine de l’application
import router from './router' // Import du routeur (fichier index.js)

const app = createApp(App) // Création de l’application Vue

app.use(createPinia()) // Utilisation de Pinia (pour gérer l'état global)
app.use(router) // Utilisation du routeur pour la navigation

app.mount('#app') // Monte l’application dans l’élément <div id="app"> du HTML
