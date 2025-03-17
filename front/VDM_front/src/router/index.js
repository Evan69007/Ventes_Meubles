import { createRouter, createWebHistory } from 'vue-router'
import VDMHome from '@/views/VDMHome.vue'
import VDMDetail from '@/views/VDMDetail.vue'
import VDMPanier from '@/views/VDMPanier.vue'
import VDMConnexion from '@/views/VDMConnexion.vue'
import VDMStock from '@/views/VDMStock.vue'
import VDMCreationCompte from '@/views/VDMCreationCompte.vue'
import VDMAjoutMeuble from '@/views/VDMAjoutMeuble.vue'
import VDMUpdateMeuble from '@/views/VDMUpdateMeuble.vue'
import VDMCompte from '@/views/VDMCompte.vue'

const routes = [
  { path: '/', component: VDMHome },
  { path: '/detail/:id', component: VDMDetail, props: true },
  { path: '/panier', component: VDMPanier },
  { path: '/connexion', component: VDMConnexion },
  { path: '/stock', component: VDMStock },
  { path: '/creation-compte', component: VDMCreationCompte },
  { path: '/ajout-meuble', component: VDMAjoutMeuble },
  { path: '/update-meuble', component: VDMUpdateMeuble },
  { path: '/compte', component: VDMCompte },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
