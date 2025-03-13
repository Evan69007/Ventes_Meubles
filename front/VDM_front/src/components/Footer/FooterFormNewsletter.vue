<template>
  <div>
    <h2 class="mb-3 font-bold">Inscrivez-vous à notre newsletter !</h2>
    <form >
      <label for="email" class= "mr-2 font-bold">Email</label>
      <input class=" border-black  rounded border-2" type="email"  placeholder=" Entrez votre adresse email" required><br>
      <button type="submit" class="flex-row  mt-3 justify-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded border-2 border-blue-500 hover:border-blue-700">S'inscrire</button>
    </form>
  </div>
</template>

<script>
export default {
  name: "FooterFormNewsletter"
}
</script>

