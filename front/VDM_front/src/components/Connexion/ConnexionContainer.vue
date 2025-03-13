<template>
  <div class="connexionContainer">
    <form method="POST" class="connexionForm">
      <div class="item">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input
          type="email"
          name="email"
          id="email"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item">
        <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
        <input
          type="password"
          name="password"
          id="password"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item flex justify-between items-center">
        <a href="#" class="text-sm text-black hover:underline">Mot de passe oublié ?</a>
        <button
          type="submit"
          class="bg-white text-black px-6 py-2 rounded-lg shadow-md hover:bg-gray-400 transition"
        >
          Se connecter
        </button>
      </div>
    </form>
  </div>
</template>

<style scoped>
.connexionContainer {
  width: 400px;
  height: 400px;
  background: white;
  padding: 2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.connexionForm {
  width: 100%;
  display: flex;
  flex-direction: column;
  gap: 2rem;
}
label,
a {
  font-family: 'Koulen';
}
</style>
