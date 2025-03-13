import { createRouter, createWebHistory } from 'vue-router'
import VDMHome from '@/views/VDMHome.vue'
import VDMDetail from '@/views/VDMDetail.vue'
import VDMPanier from '@/views/VDMPanier.vue'
import VDMConnexion from '@/views/VDMConnexion.vue'
import VDMStock from '@/views/VDMStock.vue'

const routes = [
  { path: '/', component: VDMHome },
  { path: '/detail/:id', component: VDMDetail, props: true },
  { path: '/panier', component: VDMPanier },
  { path: '/connexion', component: VDMConnexion },
  { path: '/stock', component: VDMStock },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
