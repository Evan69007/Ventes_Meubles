<template>
  <footer class="w-full py-6" style="border-top: 1px solid black;">
    <div class="max-w-7xl mx-auto px-4">
      <!-- Version mobile: tout en colonne -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Descriptif -->
        <div>
          <FooterDescriptif />
        </div>
        
        <!-- Liens -->
        <div>
          <FooterLiens />
        </div>
        
        <!-- Newsletter et Adresse -->
        <div class="sm:col-span-2 lg:col-span-1">
          <FooterFormNewsletter />
          <div class="mt-8">
            <FooterLogoPaiement />
          </div>
        </div>
      </div>
    </div>
    
    <!-- Copyright -->
    <div class="max-w-7xl mx-auto px-4 mt-8">
      <p class="text-sm" style="font-family: poppins; font-size: x-small;">© 2025 ANCIENS MEUBLES POUR UNE NOUVELLE VIE</p>
    </div>
  </footer>
</template>

<script setup>
import FooterDescriptif from './FooterDescriptif.vue'
import FooterLiens from './FooterLiens.vue'
import FooterFormNewsletter from './FooterFormNewsletter.vue'
import FooterLogoPaiement from './FooterLogoPaiement.vue'
</script>
