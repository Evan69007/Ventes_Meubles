<template>
  <div class="updateMeubleContainer">
    <form class="updateMeubleForm">
      <div class="grid grid-cols-2 gap-6">
        <div class="item">
          <label for="nom" class="block text-sm font-medium text-gray-700">Nom du meuble</label>
          <input
            type="text"
            name="nom"
            id="nom"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="type" class="block text-sm font-medium text-gray-700">Type de meuble</label>
          <input
            type="text"
            name="type"
            id="type"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="couleurs" class="block text-sm font-medium text-gray-700">Couleurs</label>
          <input
            type="text"
            name="couleurs"
            id="couleurs"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="matieres" class="block text-sm font-medium text-gray-700">Materiaux</label>
          <input
            type="text"
            name="matieres"
            id="matieres"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="hauteur" class="block text-sm font-medium text-gray-700">Hauteur</label>
          <input
            type="number"
            name="hauteur"
            id="hauteur"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="largeur" class="block text-sm font-medium text-gray-700">Largeur</label>
          <input
            type="number"
            name="largeur"
            id="largeur"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="profondeur" class="block text-sm font-medium text-gray-700">Profondeur</label>
          <input
            type="number"
            name="profondeur"
            id="profondeur"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="prix" class="block text-sm font-medium text-gray-700">Prix TTC</label>
          <input
            type="number"
            step="0.01"
            name="prix"
            id="prix"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="statut" class="block text-sm font-medium text-gray-700">Statut</label>
          <select
            name="statut"
            id="statut"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          >
            <option value="dispo">Disponible</option>
            <option value="reserve">Réservé</option>
            <option value="vendu">Vendu</option>
          </select>
        </div>

        <div class="item">
          <label for="description" class="block text-sm font-medium text-gray-700"
            >Description</label
          >
          <input
            type="text"
            name="description"
            id="description"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="etat" class="block text-sm font-medium text-gray-700">Etat</label>
          <select
            name="etat"
            id="etat"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          >
            <option value="excellent">Excellent</option>
            <option value="satisfaisant">Satisfaisant</option>
            <option value="bon">Bon</option>
          </select>
        </div>

        <div class="item">
          <label for="date" class="block text-sm font-medium text-gray-700"
            >Date de mise en ligne</label
          >
          <input
            type="date"
            name="date-mise-en-ligne"
            id="date-mise-en-ligne"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item flex justify-end col-span-2">
          <button type="submit">Modifier</button>
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>
.updateMeubleContainer {
  width: 100%;
  max-width: 800px;
  background: white;
  padding: 2rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

.updateMeubleForm {
  width: 100%;
}

.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* Deux colonnes */
  gap: 1rem; /* Espacement entre les éléments */
}

label {
  font-family: 'Koulen';
}

button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: white;
  border: 2px solid black;
  border-radius: 8px;
  color: black;
  font-size: large;
  cursor: pointer;
  padding: 8px 16px;
  outline: none;
  transition:
    background 0.3s,
    opacity 0.3s;
}

button:hover {
  background: gray;
  opacity: 0.8;
}
</style>
