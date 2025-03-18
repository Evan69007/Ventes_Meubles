<template>
  <div v-if="produit" class="productContainer">
    <div class="imagesContainer">
      <DetailImages :photos="produit.photos_meuble" />
    </div>
    <div class="infosContainer">
      <DetailName :nom="produit.nom" />
      <DetailType :type="produit.type" />
      <DetailDescription :description="produit.description" />
      <div>Couleurs : <DetailColors :couleurs="produit.couleurs" /></div>
      <div>Matériaux : <DetailMaterials :matieres="produit.matieres" /></div>
	  <div>Quantite: <DetailQuantite :quantite="produit.quantite"/></div>
      <DetailDimensions
        :hauteur="produit.hauteur"
        :largeur="produit.largeur"
        :profondeur="produit.profondeur"
      />
      <DetailPrice :prix="produit.prix_ttc" />
      <DetailBuyButton :produit-id="produit.id" />
    </div>
  </div>

  <div v-else>
    <p>Chargement des détails du produit...</p>
  </div>
</template>

<script>
import DetailImages from './DetailImages.vue'
import DetailName from './DetailName.vue'
import DetailType from './DetailType.vue'
import DetailDescription from './DetailDescription.vue'
import DetailColors from './DetailColors.vue'
import DetailMaterials from './DetailMaterials.vue'
import DetailDimensions from './DetailDimensions.vue'
import DetailPrice from './DetailPrice.vue'
import DetailBuyButton from './DetailBuyButton.vue'
import DetailQuantite from './DetailQuantite.vue'

export default {
  components: {
    DetailImages,
    DetailName,
    DetailType,
    DetailDescription,
    DetailColors,
    DetailMaterials,
    DetailDimensions,
    DetailPrice,
    DetailBuyButton,
	DetailQuantite,
  },
  data() {
    return {
      produit: null,
    }
  },
  async mounted() {
    const response = await fetch('http://localhost:8000/api/meubles')
    const data = await response.json()
    this.produit = data.find((item) => item.id == this.$route.params.id)
  },
}
</script>

<style scoped>
/* Conteneur principal 2 colonnes */
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

/* Colonne images */
.imagesContainer {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
}

/* Colonne infos */
.infosContainer {
  display: flex;
  flex-direction: column;
  align-items: start;
  gap: 1rem;
}

/* Responsive (mobile > 1 colonne) */
@media (max-width: 768px) {
  .productContainer {
    grid-template-columns: 1fr;
  }
}
</style>
