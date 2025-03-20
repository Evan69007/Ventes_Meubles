<script setup>
/* import instagram from '@/assets/IMG_footer/instagram.png';
import facebook from '@/assets/IMG_footer/facebook.png';
import twitter from '@/assets/IMG_footer/twitter.png';
import maps from '@/assets/IMG_footer/maps.png'; */
import Paiement from '@/assets/IMG_footer/Paiement.png'
</script>

<template>
  <div class="flex gap-2">
    <img class="h-8" :src="Paiement" alt="Payment Option" />
  </div>
</template>

<script>
export default {
  name: 'FooterLogoPaiement',
}
</script>
