<script setup>
import axios from 'axios'
import { useRouter } from 'vue-router'
import UserIcon from '../icons/IconUser.vue'
import CartIcon from '../icons/IconCart.vue'
import DisconnectionIcon from '../icons/IconDisconnection.vue';
import StockIcon from '../icons/IconStock.vue'

const router = useRouter()
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
			router.push('/connexion')
		}
	} catch (error) {
		console.error('Error:', error)
	}
}

</script>

<template>
  <div class="icons">
    <router-link to="/stock"><StockIcon /><span class="hidden lg:inline">Stock</span></router-link>
    <router-link to="/panier"><CartIcon /><span class="hidden lg:inline">Mon panier</span></router-link>
    <router-link to="/compte"><UserIcon /><span class="hidden lg:inline">Mon compte</span></router-link>
    <router-link to="/connexion"><DisconnectionIcon /><span class="hidden lg:inline">Deconnexion</span></router-link>
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

button:hover {
  opacity: 0.7;
}
</style>


