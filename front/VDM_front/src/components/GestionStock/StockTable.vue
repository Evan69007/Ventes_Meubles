<template>
	<div v-if="isLoading">
		chargement des données...
  	</div>
  <div v-else class="overflow-hidden rounded-lg shadow-lg bg-white p-4">
    <table class="w-full table-auto border-collapse">
      <thead class="bg-blue-800 text-white">
        <tr>
          <th class="py-3 px-4 text-left">Nom</th>
          <th class="py-3 px-4 text-left">Type</th>
          <th class="py-3 px-4 text-left">Couleurs</th>
          <th class="py-3 px-4 text-left">Matières</th>
          <th class="py-3 px-4 text-left">Dimensions (H x L x P)</th>
          <th class="py-3 px-4 text-left">Prix TTC</th>
          <th class="py-3 px-4 text-left">Statut</th>
          <th class="py-3 px-4 text-left">État</th>
          <th class="py-3 px-4 text-left">Actions</th>
        </tr>
      </thead>
      <tbody class="divide-y divide-gray-300">
        <tr
          v-for="meuble in meubles"
          :key="meuble.id"
          class="hover:bg-gray-100 transition duration-200"
        >
          <td class="py-3 px-4">{{ meuble.nom }}</td>
          <td class="py-3 px-4">{{ meuble.type }}</td>
          <td class="py-3 px-4">{{ meuble.couleurs }}</td>
          <td class="py-3 px-4">{{ meuble.matieres }}</td>
          <td class="py-3 px-4">
            {{ meuble.hauteur }} x {{ meuble.largeur }} x {{ meuble.profondeur }} cm
          </td>
          <td class="py-3 px-4">{{ meuble.prix_ttc }} €</td>
          <td class="py-3 px-4">{{ meuble.statut }}</td>
          <td class="py-3 px-4">{{ meuble.etat }}</td>
          <td class="py-3 px-4 flex space-x-2">
            <router-link :to="`/update-meuble/${meuble.id}`">Modifier</router-link>
            <button @click="supprimerMeuble(meuble.id)">Supprimer</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  
</template>

<script>
import axios from 'axios'
import { useRouter } from 'vue-router'


export default {
	data() {
		return {
			isLoading: true,
		}
  	},
	async mounted() {
		this.isLoading = true;
		try {
			const response = await fetch('http://localhost:8000/api/meubles')
			this.meubles = await response.json()
		} catch (error) {
			console.error('Erreur de chargement :', error)
		}
		finally {
			this.isLoading = false;
		}
	},
	setup ()
	{
		const router = useRouter()
		const supprimerMeuble = async (id) => {
			try {
				const response = await axios.delete(`http://localhost:8000/api/meubles/${id}`)
				if (response.data.message === 'Meuble supprimé') {
					confirm("Meuble supprimé")
					window.location.reload();
				}
			} catch (error) {
				console.error('Error:', error)
			}
		}
		return {supprimerMeuble}
	}
}

</script>

<style scoped>
th,
td {
  border: 1px solid #ddd;
  text-align: left;
  font-family: 'Poppins';
}
th {
  background-color: #074566;
  color: white;
  font-family: 'Poppins';
  font-size: small;
}

button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: white;
  border: 1px solid black;
  border-radius: 8px;
  color: black;
  font-size: large;
  cursor: pointer;
  padding: 8px 16px;
  outline: none;
  display: flex;
  align-items: center;
  gap: 8px;
  transition:
    background 0.3s,
    opacity 0.3s;
}

button:hover {
  background: gray;
  opacity: 0.8;
}
</style>
