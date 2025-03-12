<script setup>
import FooterDescriptif from './FooterDescriptif.vue'
import FooterLiens from './FooterLiens.vue'
import FooterFormNewsletter from './FooterFormNewsletter.vue'
import FooterLogoPaiement from './FooterLogoPaiement.vue'
</script>
<template>
  <footer class="fixed bottom-0 left-0 right-0 w-full h-[20vh] flex justify-between items-center bg-gray-50 shadow-sm text-brown-800 px-6 md:flex-col sm:flex-row content-between g-4">
    <div class="flex w-full space-x-6">
      <FooterDescriptif class="flex-1 flex-col md:flex-row" />
      <FooterLiens class="flex-1 flex-col md:flex-row" />
      <FooterFormNewsletter class="flex-1 flex-col md:flex-row" />
      <FooterLogoPaiement class="flex-1 flex-col md:flex-row " />
    </div>
  </footer>
</template>

<script>
export default {
  name: 'Footer',
  components: {
    FooterDescriptif,
    FooterLiens,
    FooterFormNewsletter,
    FooterLogoPaiement
  }
}
</script>
