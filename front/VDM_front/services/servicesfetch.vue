<!-- <template>
    <div>
      <h1>Home</h1>
      <div v-if="meubles_anciens.length">
        <div v-for="(meuble, index) in meubles_anciens" :key="index">
          <p>Nom {{ meuble.nom }}</p>
          <p>Nom {{ meuble.nom }}</p>
          <p>Nom {{ meuble.nom }}</p>
          <p>Nom {{ meuble.nom }}</p>
          <p>Nom {{ meuble.nom }}</p>
  
        </div>
      </div>
    </div>
  </template>
 
  <script>
  export default {
    data() {
      return {
        meubles_anciens: [],
      };
    },
    async mounted() {
      const response = await fetch("/meubles_anciens.json");
      const data = await response.json();
      this.meubles_anciens = data.meubles;
    },
  };
  </script> -->