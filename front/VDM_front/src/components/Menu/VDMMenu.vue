<script setup>
// eslint-disable-next-line no-unused-vars
const emit = defineEmits(['close'])
</script>

<template>
  <div class="menu-overlay">
    <div class="menu-content">
      <div class="menu-grid">
        <!-- Colonne 1 -->
        <div>
          <h3 class="menu-title">Inspirez-vous</h3>
          <ul class="menu-list">
            <li>Notre sélection</li>
            <li>Dernières arrivées</li>
            <li>Promotions</li>
          </ul>
        </div>

        <!-- Colonne 2 -->
        <div>
          <h3 class="menu-title">Achetez par matériaux</h3>
          <ul class="menu-list">
            <li>Béton</li>
            <li>Tissu</li>
            <li>Verre</li>
            <li>Cuir</li>
            <li>Marbre</li>
            <li>Métal</li>
            <li>Plastique</li>
            <li>Acier</li>
            <li>Pierre</li>
            <li>Bois</li>
          </ul>
        </div>

        <!-- Colonne 3 -->
        <div>
          <h3 class="menu-title">Achetez par pièce</h3>
          <ul class="menu-list">
            <li>Toutes les pièces</li>
            <li>Fauteuil</li>
            <li>Cadre de lit</li>
            <li>Banc</li>
            <li>Bibliothèque</li>
            <li>Meuble</li>
            <li>Chaise</li>
            <li>Bureau</li>
            <li>Lampe</li>
            <li>Table de chevet</li>
            <li>Canapé</li>
            <li>Table</li>
          </ul>
        </div>

        <!-- Colonne 4 -->
        <div>
          <h3 class="menu-title">Achetez par pièce</h3>
          <ul class="menu-list">
            <li>Chambre</li>
            <li>Salle à manger</li>
            <li>Bureau à domicile</li>
            <li>Salon</li>
            <li>Terrasse</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.menu-overlay {
  position: fixed;
  top: 80px;
  left: 0;
  width: 100vw;
  background-color: white;
  z-index: 900;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  align-items: center;
  transition: transform 0.3s ease-in-out;
}

.menu-content {
  max-width: 1200px;
  width: 100%;
}

.menu-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 2rem;
  width: 100%;
}

.menu-title {
  font-size: 1.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
}

.menu-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-list li {
  margin-bottom: 0.5rem;
}
</style>
