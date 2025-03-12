<script setup>
import DetailImages from './DetailImages.vue'
import DetailName from './DetailName.vue'
import DetailType from './DetailType.vue'
import DetailDescription from './DetailDescription.vue'
import DetailColors from './DetailColors.vue'
import DetailMaterials from './DetailMaterials.vue'
import DetailDimensions from './DetailDimensions.vue'
import DetailPrice from './DetailPrice.vue'
import DetailBuyButton from './DetailBuyButton.vue'
</script>

<template>
  <div class="productContainer">
    <div class="imagesContainer">
      <div><DetailImages /></div>
    </div>
    <div class="infosContainer">
      <div><DetailName /></div>
      <div><DetailType /></div>
      <div><DetailDescription /></div>
      <div><DetailColors /></div>
      <div><DetailMaterials /></div>
      <div><DetailDimensions /></div>
      <div><DetailPrice /></div>
      <div><DetailBuyButton /></div>
    </div>
  </div>
</template>

<style scoped>
/* conteneur principal  2 colonnes */
.productContainer {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 4rem;
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 2rem;
  margin-top: 10rem;
}

/* colonne images */
.imagesContainer {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
}

/* colonne infos */
.infosContainer {
  display: flex;
  flex-direction: column;
  align-items: start;
  gap: 1rem;
}

/* responsive (mobile > 1 colonne) */
@media (max-width: 768px) {
  .productContainer {
    grid-template-columns: 1fr;
  }
}
</style>
