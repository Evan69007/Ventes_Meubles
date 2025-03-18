<template>
    <div class="updateCompteContainer">
      <form class="updateCompteForm">
        <div class="grid grid-cols-2 gap-6">
     
      <div class="item">
        <label for="Nom" class="block text-sm font-medium text-gray-700">Mon Nom</label>
        <input
          type="nom"
          name="nom"
          id="nom"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
      <div class="item">
        <label for="Prenom" class="block text-sm font-medium text-gray-700">Mon Prenom</label>
        <input
          type="prenom"
          name="prenom"
          id="prenom"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item">
        <label for="email" class="block text-sm font-medium text-gray-700">Mon Email</label>
        <input
          type="email"
          name="email"
          id="email"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>

      <div class="item">
        <label for="password" class="block text-sm font-medium text-gray-700"
          >Mon mot de passe</label
        >
        <input
          type="password"
          name="password"
          id="password"
          required
          class="w-full p-3 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
          
  
  
          <div class="item flex justify-end col-span-2">
            <button type="submit">Modifier</button>
          </div>
        </div>
      </form>
    </div>
  </template>
  
  <style scoped>
  .updateCompteContainer {
    width: 100%;
    max-width: 800px;
    background: white;
    padding: 2rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }
  
  .updateCompteForm {
    width: 100%;
  }
  
  .grid {
    display: flex;
    flex: wrap;
    flex-direction: column;
    gap: 1rem; /* Espacement entre les éléments */
  }
  
  label {
    font-family: 'Koulen';
  }
  
  button {
    font-family: 'Koulen', sans-serif;
    font-weight: bold;
    text-transform: uppercase;
    background: white;
    border: 2px solid black;
    border-radius: 8px;
    color: black;
    font-size: large;
    cursor: pointer;
    padding: 8px 16px;
    outline: none;
    transition:
      background 0.3s,
      opacity 0.3s;
  }
  
  button:hover {
    background: gray;
    opacity: 0.8;
  }
  </style>
  