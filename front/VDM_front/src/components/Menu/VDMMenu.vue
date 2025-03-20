<script setup>
// eslint-disable-next-line no-unused-vars
const emit = defineEmits(['close'])
</script>

<template>
  <div class="menu-overlay" >
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
          <h3 class="menu-title">Achetez par materiaux</h3>
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
          <h3 class="menu-title">Achetez par piece</h3>
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
          <h3 class="menu-title">Achetez par piece</h3>
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
  display: flex;
  opacity: 0;
  visibility: hidden; /* Hide the overlay initially */
  position: fixed;
  top: 70px; /* Adjust this value as needed */
  left: 0;
  width: 100vw;
  height: calc(100vh - 70px); /* Adjust height to account for the top offset */
  background-color: rgb(255, 255, 255);
  z-index: 900;
  padding: 2rem;
  box-sizing: border-box;
  flex-direction: column;
  align-items: center;
  transition: opacity 0.4s ease-in-out, visibility 0.4s ease-in-out; /* Transition both opacity and visibility */
}

.menu-open {
  opacity: 1;
  visibility: visible; /* Show the overlay when the menu is open */
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
  font-family: 'koulen';
  transition: scale 0.3s ease-in-out;
}
.menu-title:hover {
  scale: 1.1;
  cursor: pointer;

}

.menu-list {
  list-style: none;
  padding: 0;
  margin: 0;
  font-family: 'poppins';
  
}
.menu-list li:hover {
  margin-bottom: 0.5rem;
  font-family: 'poppins';
  cursor: pointer;
  scale: 1.1;
}

.menu-list li {
  margin-bottom: 0.5rem;
  font-family: 'poppins';
}
</style>
