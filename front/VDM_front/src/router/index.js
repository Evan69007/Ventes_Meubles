import { createRouter, createWebHistory } from 'vue-router'
import VDMHome from '@/views/VDMHome.vue'
import VDMDetail from '@/views/VDMDetail.vue'
import VDMPanier from '@/views/VDMPanier.vue'

const routes = [
  { path: '/', component: VDMHome },
  { path: '/detail/:id', component: VDMDetail, props: true },
  { path: '/panier', component: VDMPanier },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})

export default router
