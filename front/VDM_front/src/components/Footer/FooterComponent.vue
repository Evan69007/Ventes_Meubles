<template>
  <footer class="bottom-0 left-0 right-0 w-full bg-gray-50 shadow-sm text-brown-800 px-4 py-6">
    <div
      class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6 max-w-7xl mx-auto"
    >
      <FooterDescriptif class="w-full md:w-1/4" />
      <FooterLiens class="w-full md:w-1/4" />
      <FooterFormNewsletter class="w-full md:w-1/4" />
      <FooterLogoPaiement class="w-full md:w-1/4" />
    </div>
  </footer>
</template>

<script setup>
import FooterDescriptif from './FooterDescriptif.vue'
import FooterLiens from './FooterLiens.vue'
import FooterFormNewsletter from './FooterFormNewsletter.vue'
import FooterLogoPaiement from './FooterLogoPaiement.vue'
</script>
