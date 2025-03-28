<p align="center">
  <img src="front/VDM_front/src/assets/images/HomePage.png" alt="Logo" width="400">
</p>





 <h1 align="center"> AMPNV-Anciens Meubles Pour une Nouvelle Vie</h1>







##  **Description du projet** :

📌 **Plateforme de gestion d’un magasin de meubles** sur lequel des utilisateurs (admin) interagissent avec le **stock** et des utilisateurs (clients) **s'inscrivent et se connectent.**

##  **Screen du projet** :

<div style="display: flex; justify-content: space-around;">
<img src="front/VDM_front/src/assets/images/HomePage.png" alt="HomePage" width="200">

<img src="front/VDM_front/src/assets/images/HomePageMeubles.png" alt="HompePageListeMeubles" width="200">

<img src="front/VDM_front/src/assets/images/DetailMeuble.png" alt="DetailMeuble" width="200">

<img src="front/VDM_front/src/assets/images/Connexion.png" alt="Connexion" width="200">

<img src="front/VDM_front/src/assets/images/ModifCompte.png" alt="ModifCompte" width="200">

<img src="front/VDM_front/src/assets/images/StockMeubles.png" alt="Stock" width="200">

<img src="front/VDM_front/src/assets/images/Panier.png" alt="Panier" width="200">
</div>

## **Fonctionnalités principales (MVP)**: 

 - ✅ L’affichage d’une page principale affichant tous les meubles
 - ✅ Détail d'un meuble avec photos et caractéristiques                
 - ✅ Gestion du stock pour l'administrateur                              
 - ✅ Inscription, connexion et deconnexion des utilisateurs  



## **Fonctionnalités bonus**: 

🔍 **Accessibilité** : Respect des critères RGAA (balises, couleurs, alt image.)        
🌱 **Eco-conception** : design épuré, utilisation minimale de polices  



## **Fonctionnalités futures**: 
  
- Ajout d'un système de paiement
- Optimisation du panier
- Interface plus intuitive
- Modification du compte
- Ajout/Modification des photos de meubles  


## **Prérequis et Stack Technique**: 

- **Back-end** : Laravel (PHP) 
- **Front-end** : Vue.js (JavaScript), Tailwind (CSS) 
- **Base de données** : MySQL

## **Interactions Front-end <  > Back-end**:   

- API permettant la communication entre le site (front) et la base de données (back)
- Authentification des utilisateurs
- Gestion des produits en temps réel


## **Installation**: 

📌**Cloner le dépôt** :git@github.com:Evan69007/Ventes_Meubles.git **ou télécharger les fichiers du projet** : https://github.com/Evan69007/Ventes_Meubles.git

<details>
  <summary> 📌Back: Cliquez ici pour voir le contenu  </summary>

## 🛠️ Configuration de la Base de Données

### 📌 Prérequis

Avant de commencer, assurez-vous d'avoir installé :

- **MySQL**

---

## 🚀 Étapes d'installation

### 1️⃣ Création du fichier `.env`

Créez un fichier `.env` dans le projet et ajoutez-y les informations suivantes :

<details>
  <summary>📄 Contenu du fichier `.env`</summary>

  ```ini
  APP_NAME=Laravel
  APP_ENV=local
  APP_KEY=base64:/XzvDYpSWHx51Ee6ULG2Y0/TF2alVF2C3Ug0wEuDPzU=
  APP_DEBUG=true
  APP_URL=http://localhost

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=ventes_meubles_back
  DB_USERNAME=utilisateur
  DB_PASSWORD=root
  ```

  Adaptez `DB_PORT` selon votre configuration.

</details>

---

### 2️⃣ Création de la base de données

Dans votre administrateur de base de données, exécutez la commande suivante :

```sql
CREATE DATABASE ventes_meubles_back;
```

---

### 3️⃣ Création de l'utilisateur

Exécutez la commande suivante pour créer un utilisateur et lui attribuer les droits :

```sql
CREATE USER 'utilisateur'@'localhost' IDENTIFIED WITH caching_sha2_password BY 'root';
GRANT ALL PRIVILEGES ON *.* TO 'utilisateur'@'localhost' WITH GRANT OPTION;
ALTER USER 'utilisateur'@'localhost' REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;
```

---

### 4️⃣ Test de la connexion

Testez la connexion à la base de données avec la commande :

```bash
mysql -u utilisateur -p -h 127.0.0.1 -P [votre port]
```

📌 **Exemple :**

```bash
mysql -u utilisateur -p -h 127.0.0.1 -P 8889
```

---

### 5️⃣ Migration des tables

Effectuez la migration des tables avec :

```bash
php artisan migrate
```

---

### 6️⃣ Ajout des données (Seeders)

Insérez des données de test dans la base de données :

```bash
php artisan db:seed --class=MeubleSeeder 
php artisan db:seed --class=PhotoSeeder
```

---

✅ **Votre base de données est maintenant prête !** 🎉


</details>

<details>
  <summary>📌Front: Cliquez ici pour voir le contenu </summary>

## 🚀  Installation de Vue.js et Tailwind CSS dans un projet existant

### 📌  Prérequis

Avant de commencer, assurez-vous que chaque membre de l'équipe dispose de la même version de Node.js et npm.

- **node -v**
- **npm -v**

Si nécessaire, installez-les depuis nodejs.org.

### **1️⃣ Accès au projet**

- Naviguez vers le dossier de votre projet :

      cd VENTE_MEUBLES

### **2️⃣ Vérification et installation de Vue.js**

- Vérifiez si Vue.js est déjà installé :

      cat package.json | grep vue

- Si ce n'est pas le cas, installez-le :

      npm install vue

### **3️⃣ Vérification et installation de Vue Router**

- Vérifiez si Vue Router est installé :

      cat package.json | grep "vue-router"

- Si besoin, installez-le :

      npm install vue-router

- Si le fichier src/router/index.js ou src/router.js n'existe pas, créez-le :

      import { createRouter, createWebHistory } from 'vue-router';

      const routes = [
            { path: '/', component: () => import('@/components/Home.vue') },
                    ];

      const router = createRouter({
          history: createWebHistory(),
              routes,
                });

       export default router;

- Ajoutez ensuite le router dans main.js :

      import { createApp } from 'vue';
      import App from './App.vue';
      import router from './router';

      const app = createApp(App);
      app.use(router);
      app.mount('#app');

### **4️⃣ Vérification et installation de Pinia**

- Vérifiez si Pinia est installé :

      cat package.json | grep pinia

- Si ce n'est pas le cas, installez-le :

      npm install pinia

- Ajoutez-le à main.js :

      import { createPinia } from 'pinia';
      const pinia = createPinia();
      app.use(pinia);

### **5️⃣ Vérification et installation de Heroicons**

- Vérifiez si Heroicons est installé :

      cat package.json | grep heroicons

- Si ce n'est pas le cas, installez-le :

      npm install @heroicons/vue

- Exemple d'utilisation :

      <template>
          <HomeIcon class="w-6 h-6 text-blue-500" />
      </template>

      <script setup>
          import { HomeIcon } from '@heroicons/vue/24/solid';
      </script>

### **6️⃣ Vérification et installation de Tailwind CSS**

- Vérifiez si Tailwind CSS est installé :

      cat package.json | grep tailwindcss

- Si ce n'est pas le cas, installez-le :

      npm install -D tailwindcss postcss autoprefixer
      npx tailwindcss init -p

- Ajoutez Tailwind à tailwind.config.js :

      /** @type {import('tailwindcss').Config} */
      export default {
      content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
        theme: {
          extend: {},
            },
          plugins: [],
            };

- Ajoutez Tailwind à src/assets/tailwind.css :

    @tailwind base;
    @tailwind components;
    @tailwind utilities;

- Et importez-le dans main.js :

    import './assets/tailwind.css';

### **7️⃣ Vérification finale**

- Lancez le serveur de développement pour vérifier que tout fonctionne correctement :

    npm run dev

### ✅ Votre projet est maintenant prêt avec Vue.js et Tailwind CSS ! 🎉

</details>





  
   
    
   

  
## **Deroulement du projet**: 

### **Organisation des équipes**

👨‍💻 **Semaine 1 (4 jours)** : Une équipe sur le front, une autre sur le back

🔄 **Semaine 2 (3 jours - Demo (Jour 4)** : Inversion des équipes

📌 **Documentation** : Nomenclature commune, Postman pour tester l'API, repositorie commun
  
### **Méthodologie de travail**

📌 Tâches découpées en fonction des priorités

📌 Utilisation d'outils de gestion de projet (**Notion**)

📌 Communication continue entre les équipes


## **Auteurs**:  

### Equipe Back-end première semaine

*Neelab SADAT

*Evan Aguttes-Rivelon

*Bilal Askri

*Théo Butz

*Tanguy Jonqua

### Equipe Front-end première semaine

*Alejandra Adeikalam Carmona

*Vincent Bourgin

*Mariama DAFF

*Elodie Sorce
