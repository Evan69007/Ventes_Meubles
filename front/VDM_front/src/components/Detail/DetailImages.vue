<script>
import { useRoute } from 'vue-router';
import { ref } from 'vue';

export default {
	data ()
	{
		return {
			isLoading: true,
			selectedImage: '',
			images: '',
		}
	},
	async mounted() {
		const route = useRoute()
		this.isLoading = true;
		try {
			const meuble_id = route.params.id
			const response = await fetch(`http://localhost:8000/api/meubles/${meuble_id}/photos`)
			this.images = await response.json()
		} catch (error) {
			console.error('Erreur de chargement :', error)
		}
		finally {
			this.isLoading = false;
		}
		this.selectedImage = ref(`http://localhost:8000/storage/photos/${this.images[0].url}`)
	}
}
</script>

<template>
	<div v-if="isLoading">
		chargement des images...
  	</div>
	<div v-else class="carousel">
		<!-- image principale -->
		<img :src="selectedImage" class="main-image" alt="Image du meuble" />

		<!-- miniatures -->
		<div class="thumbnails">
		<img
			v-for="(img, index) in images"
			:key="index"
			:src="`http://localhost:8000/storage/photos/${img.url}`"
			@click="selectedImage = `http://localhost:8000/storage/photos/${img.url}`"
			class="thumbnail"
			:class="{ active: selectedImage === img }"
		/>
		</div>
	</div>
</template>

<style scoped>
.carousel {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 1rem;
}

.main-image {
  width: 100%;
  max-width: 500px;
  height: auto;
  max-height: 45%;
  object-fit: cover;
  transition: opacity 0.3s ease-in-out;
}

.thumbnails {
  display: flex;
  justify-content: center;
  gap: 1rem;
}

.thumbnail {
  width: 80px;
  height: auto;
  object-fit: cover;
  cursor: pointer;
  transition:
    transform 0.2s ease-in-out,
    border 0.2s;
  border: 2px solid transparent;
}

.thumbnail:hover {
  transform: scale(1.1);
}

.thumbnail.active {
  border: 2px solid black;
}
</style>
