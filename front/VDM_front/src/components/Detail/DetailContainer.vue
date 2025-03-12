<script setup>
import DetailImageXL from './DetailImageXL.vue'
import DetailImagesXS from './DetailImagesXS.vue'
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
      <div><DetailImageXL /></div>
      <div><DetailImagesXS /></div>
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
