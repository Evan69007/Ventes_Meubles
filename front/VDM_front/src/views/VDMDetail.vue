<script setup>
import DetailContainer from '@/components/Detail/DetailContainer.vue'
import FooterComponent from '@/components/Footer/FooterComponent.vue'
</script>

<template>
  <div>
    <main>
      <DetailContainer />
    </main>
    <footer>
      <FooterComponent />
    </footer>
  </div>
</template>

<style scoped>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
</style>
