<template>
  <div class="ajoutMeubleContainer">
    <form class="ajoutMeubleForm"  @submit.prevent="submitForm">
      <div class="grid grid-cols-2 gap-6">
        <div class="item">
          <label for="nom" class="block text-sm font-medium text-gray-700">Nom du meuble</label>
          <input
            type="text"
            name="nom"
            v-model="formData.nom"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="type" class="block text-sm font-medium text-gray-700">Type de meuble</label>
          <input
            type="text"
            name="type"
            v-model="formData.type"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="couleurs" class="block text-sm font-medium text-gray-700">Couleurs</label>
          <input
            type="text"
            name="couleurs"
            v-model="formData.couleurs"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="matieres" class="block text-sm font-medium text-gray-700">Materiaux</label>
          <input
            type="text"
            name="matieres"
            v-model="formData.matieres"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="hauteur" class="block text-sm font-medium text-gray-700">Hauteur</label>
          <input
            type="number"
            name="hauteur"
            v-model="formData.hauteur"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="largeur" class="block text-sm font-medium text-gray-700">Largeur</label>
          <input
            type="number"
            name="largeur"
            v-model="formData.largeur"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="profondeur" class="block text-sm font-medium text-gray-700">Profondeur</label>
          <input
            type="number"
            name="profondeur"
            v-model="formData.profondeur"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="prix_ttc" class="block text-sm font-medium text-gray-700">Prix TTC</label>
          <input
            type="number"
            step="0.01"
            name="prix_ttc"
            v-model="formData.prix_ttc"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>
		<div class="item">
          <label for="quantite" class="block text-sm font-medium text-gray-700">Quantite</label>
          <input
            type="text"
            name="quantite"
            v-model="formData.quantite"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>
        <div class="item">
          <label for="statut" class="block text-sm font-medium text-gray-700">Statut</label>
          <select
            name="statut"
            v-model="formData.statut"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          >
            <option value="dispo">Disponible</option>
            <option value="reserve">Réservé</option>
            <option value="vendu">Vendu</option>
          </select>
        </div>

        <div class="item">
          <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
          <input
            type="text"
            name="description"
            v-model="formData.description"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item">
          <label for="etat" class="block text-sm font-medium text-gray-700">Etat</label>
          <select
            name="etat"
            v-model="formData.etat"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          >
            <option value="parfait">parfait</option>
            <option value="bon">bon</option>
            <option value="mauvais">mauvais</option>
          </select>
        </div>

        <div class="item">
          <label for="date_mise_en_ligne" class="block text-sm font-medium text-gray-700">Date de mise en ligne</label>
          <input
            type="date"
            name="date_mise_en_ligne"
           	v-model="formData.date_mise_en_ligne"
            required
            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-black focus:border-black"
          />
        </div>

        <div class="item flex justify-end col-span-2">
          <button type="submit">Ajouter</button>
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>
.ajoutMeubleContainer {
  width: 100%;
  max-width: 800px;
  background: white;
  padding: 2rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  border-radius: 8px;
}

.ajoutMeubleForm {
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


<script>
	import { ref, reactive } from 'vue'
	import axios from 'axios'
	import { useRouter } from 'vue-router'

	export default {
	setup() {
		const router = useRouter()
		// Define formData here as a reactive object
		const formData = reactive({
			nom: '',
			type: '',
			prix_ttc: '',
			quantite: '',
			etat: '',
			date_mise_en_ligne: '',
			statut: '',
			matieres: '',
			couleurs: '',
			hauteur: '',
			largeur: '',
			profondeur: '',
			description: '',
		})
		
		const submitForm = async () => {
			try {
				// Use formData directly - it's in scope because it's defined above
				const response = await axios.post('http://localhost:8000/api/meubles', formData)
				if (response.data.message === 'Meuble ajoute') {
					router.push('/')
				}
			} catch (error) {
				console.error('Error:', error)
			}
		}
			
		// Return formData so it's available in the template
		return { formData, submitForm }
		}
	}
</script>