<script setup>
import axios from 'axios'
import { useRoute, useRouter } from 'vue-router'
import UserIcon from '../icons/IconUser.vue'
import CartIcon from '../icons/IconCart.vue'
import { ref, onMounted, watch} from 'vue';
import DisconnectionIcon from '../icons/IconDisconnection.vue';
import StockIcon from '../icons/IconStock.vue'

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
    <router-link to="/stock" class="button"><StockIcon /><span class="hidden lg:inline" style="font-family: poppins;"> Stock</span></router-link>
    <router-link to="/panier" class="button"><CartIcon /><span class="hidden lg:inline" style="font-family: poppins;"> Mon panier</span></router-link>
    <router-link to="/compte" class="button"><UserIcon /> <span class="hidden lg:inline" style="font-family: poppins;">Mon compte</span></router-link>
    <div v-if="isConnected">
        <button @click="deconnexion()" class="button"><DisconnectionIcon /> <span class="hidden lg:inline" style="font-family: poppins;">Deconnexion</span></button>
    </div>
    <div v-else>
      <router-link to="/connexion" class="button"><DisconnectionIcon /> <span class="hidden lg:inline" style="font-family: poppins;">Se Connecter</span></router-link>
    </div>
  </div>
</template>

<style>
.icons {
  display: flex;
  flex-direction: row;
  gap: 2em;
}

.icons a {
  display: flex;
  align-items: center;
  gap: 8px;
  text-decoration: none;
  color: black;
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  font-size:small;
}

.icons a:hover {
  opacity: 0.7;
}

button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: none;
  border: none;
  color: black;
  font-size: x-large;
  cursor: pointer;
  padding: 0;
  outline: none;
  display: flex;
  align-items: center;
  gap: 8px;
}

button:hover,
.button:hover {
  opacity: 0.7;
  text-decoration: underline;
  text-decoration-thickness: 2px;
  text-underline-offset: 3px;
  transform: scale(1.1);
  text-decoration-color: grey;
}

</style>
