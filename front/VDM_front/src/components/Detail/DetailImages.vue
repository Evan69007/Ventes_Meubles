<script setup>
import { ref } from 'vue'

import img1 from '@/assets/images/bahut_louis_xv.jpg'
import img2 from '@/assets/images/Buffet_louis_xv_xvi_xs.jpg'
import img3 from '@/assets/images/buffet_transition_xs.jpg'
import img4 from '@/assets/images/buffet_xs.jpg'

const images = [img1, img2, img3, img4]
const selectedImage = ref(images[0]) // Image principale
</script>

<template>
  <div class="carousel">
    <!-- image principale -->
    <img :src="selectedImage" class="main-image" alt="Image du meuble" />

    <!-- miniatures -->
    <div class="thumbnails">
      <img
        v-for="(img, index) in images"
        :key="index"
        :src="img"
        @click="selectedImage = img"
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
