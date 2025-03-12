<script setup>
import instagram from '@/assets/IMG_footer/instagram.png';
import facebook from '@/assets/IMG_footer/facebook.png';
import twitter from '@/assets/IMG_footer/twitter.png';
import maps from '@/assets/IMG_footer/maps.png';
import Paiement from '@/assets/IMG_footer/Paiement.png';
</script>

<template>
  <div >
    <p class="font-bold">LOGO </p>
    <img class="w-6 h-6 mb-2" :src="Paiement" alt="logo paiement">
    <img class="w-6 h-6 mb-2" :src="instagram" alt="logo instagram">
    <img class="w-6 h-6 mb-2":src="twitter" alt="logo twitter">
    <img class="w-8 h-8 mb-2":src="facebook" alt="logo facebook">
    <img class="w-8 h-8" :src="maps" alt="logo google map">
  </div>
</template>

<script>
export default {
  name: "FooterLogoPaiement"
}
</script>
