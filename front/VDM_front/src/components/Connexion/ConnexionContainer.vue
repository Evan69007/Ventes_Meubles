<template>
  <div class="connexionContainer">
    <form method="POST" class="connexionForm">
      <h1>Vous n'avez pas encore de compte</h1>
      <button>Creer mon compte</button>
      <h1>Vous avez un compte</h1>
      <div>Entrez vos identifiants</div>
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
  height: fit-content;
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
a,
h1 {
  font-family: 'Koulen';
}

button {
  font-family: 'Koulen', sans-serif;
  font-weight: bold;
  text-transform: uppercase;
  background: white;
  border: 1px solid black;
  border-radius: 8px;
  color: black;
  font-size: large;
  cursor: pointer;
  padding: 8px 16px;
  outline: none;
  display: flex;
  align-items: center;
  gap: 8px;
  transition:
    background 0.3s,
    opacity 0.3s;
}

button:hover {
  background: gray;
  opacity: 0.8;
}
</style>
