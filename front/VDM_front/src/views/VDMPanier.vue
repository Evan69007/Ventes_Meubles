<!-- La vue principale qui intègre tous les composants -->
<script setup>
import { onMounted } from 'vue'
import PanierList from '@/components/Panier/PanierList.vue'
import PanierSummary from '@/components/Panier/PanierSummary.vue'
import PanierActions from '@/components/Panier/PanierActions.vue'
import FooterComponent from '@/components/Footer/FooterComponent.vue'
import { usePanierStore } from '@/stores/panierStore'

const panierStore = usePanierStore()

onMounted(() => {
  panierStore.loadFromLocalStorage()
})
</script>

<template>
  <div class="container mx-auto p-4 mt-32">
    <h1 class="text-2xl font-bold mb-4">Votre Panier</h1>

    <!-- Contenu du panier -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-16">
      <div class="lg:col-span-2">
        <PanierList />
      </div>
      <div class="lg:col-span-1">
        <PanierSummary />
        <PanierActions />
      </div>
    </div>
  </div>

  <footer>
    <FooterComponent />
  </footer>
</template>
