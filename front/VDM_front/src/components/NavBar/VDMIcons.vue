<script setup>
import axios from 'axios'
import { useRoute, useRouter } from 'vue-router'
import UserIcon from '../icons/IconUser.vue'
import CartIcon from '../icons/IconCart.vue'
import { ref, onMounted, watch} from 'vue';

const isConnected = ref(false);
const router = useRouter()
const route = useRoute()
const deconnexion = async () => {
	try {
		const access_token = JSON.parse(sessionStorage.getItem('access_token'))
		const user = await axios.get("http://localhost:8000/api/user", {
			headers: {
				Authorization: `${access_token.token_type} ${access_token.access_token}`,
				Accept: "application/json"
			}
		})
		const response = await axios.post(`http://localhost:8000/api/logout`, user.data, {
			headers: {
				Authorization: `${access_token.token_type} ${access_token.access_token}`,
				Accept: "application/json"
			}
		})
		if (response.data.message === 'User disconnected') {
			isConnected.value = false
			sessionStorage.removeItem('access_token')
			router.push('/connexion')
		}
	} catch (error) {
		console.error('Error:', error)
	}
}

function checkConnection() {
	isConnected.value = !!sessionStorage.getItem('access_token');
}

onMounted(() => {
  checkConnection();
});

watch(
  () => route.path, // Watch the route path
  () => {
    checkConnection(); // Call checkConnection when the route changes
  }
);
</script>

<template>
  <div class="icons">

    <router-link to="/stock"><CartIcon /> Stock</router-link>
    <router-link to="/panier"><CartIcon /> Mon panier</router-link>
    <router-link to="/compte"><UserIcon /> Mon compte</router-link>
	
	<div v-if="isConnected">
    	<button @click="deconnexion()"><UserIcon /> Deconnexion</button>
	</div>
	<div v-else>
		<router-link to="/connexion"><UserIcon /> Se Connecter</router-link>
	</div>
  </div>
</template>

<style>
.icons {
  display: flex;
  flex-direction: row;
  gap: 2em;
}

button:hover {
  opacity: 0.7;
}
</style>