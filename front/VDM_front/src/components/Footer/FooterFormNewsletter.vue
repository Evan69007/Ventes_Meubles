<template>
  <div>
    <h3 class="font-bold text-lg mb-4" style="font-family: poppins; font-weight:normal;">ABONNEZ-VOUS À LA NEWSLETTER</h3>
    <div class="flex gap-2 mb-6">
      <input 
        type="email" 
        placeholder="Entrez votre email" 
        class="border border-black p-2 "
      >
      <button 
        type="submit" 
        class="subscribe-btn border-2 border-black px-4 py-2"
      >
        je m'abonne
      </button>
    </div>

    <address class="not-italic text-sm" style="font-family: poppins; font-weight: normal;">
      15 Rue des Capucins<br>
      Lyon<br>
      69006<br>
      France
    </address>
  </div>
</template>

<style scoped>
.subscribe-btn {
  border: 1px solid black;
  font-family: poppins;
  font-weight: normal;
  font-size: medium;
}
</style>

<script>
export default {
  name: "FooterFormNewsletter"
}
</script>

