<template>
  <div class="creationCompteContainer">
    <form class="creationCompteForm" @submit.prevent="submitForm">
      <div class="item">
        <label for="Nom" class="block text-sm font-medium text-gray-700">Votre Nom Complet</label>
        <input
          type="nom"
          name="nom"
          v-model="formData.name"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item">
        <label for="email" class="block text-sm font-medium text-gray-700">Votre Email</label>
        <input
          type="email"
          name="email"
          v-model="formData.email"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item">
        <label for="password" class="block text-sm font-medium text-gray-700"
          >Votre mot de passe</label
        >
        <input
          type="password"
          name="password"
          v-model="formData.password"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item flex justify-between items-center">
        <button type="submit">Créer mon compte</button>
      </div>
    </form>
  </div>
</template>

<style scoped>
.creationCompteContainer {
  width: 400px;
  height: fit-content;
  background: white;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.creationCompteForm {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 2rem;
}
label,
a {
  font-family: 'Koulen';
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

<script>
	import { ref } from 'vue'
	import axios from 'axios'
	import { useRouter } from 'vue-router'

	export default {
	setup() {
		const router = useRouter()
		const formData = ref({
			name: '',
			email: '',
			password: '',
		})
		
		const submitForm = async () => {
			try {
				const response = await axios.post("http://localhost:8000/api/register", formData.value)
				if (response.data.access_token) {
					sessionStorage.setItem('access_token', JSON.stringify(response.data))
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