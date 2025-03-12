# **Anciens meubles pour une nouvelle vie**

## **Description du projet** :

📌 Cette plateforme a pour objectif la gestion d’un magasin de meubles,sur laquel des utilisateurs s’inscrivent et interagissent avec le stock.

📌 Le projet est divisé en 2 équipes imposées :

- La première semaine, une équipe front-end et une back-end

-

## **Screen du projet** :

<div style="display: flex; justify-content: space-around;">
<img src="association/Screen/PlayaClean_Page_authentification.png" alt="authentification" width="200">

<img src="association/Screen/PlayaClean_TableaudeBord.png" alt="TableauDeBord" width="200">

<img src="association/Screen/PlayaClean_ModifCollect.png" alt="ModifCollect" width="200">

<img src="association/Screen/PlayaClean_ListeBenevoles.png" alt="ListBenevoles" width="200">

<img src="association/Screen/PlayaClean_ModifBenevoles.png" alt="ModifBenevoles" width="200">

<img src="association/Screen/PlayaClean_AjoutBenevole.png" alt="AjoutBenevole" width="200">

<img src="association/Screen/PlayaClean_MonCompte.png" alt="MonCompte" width="200">
</div>

## **Fonctionnalités principales (MVP)**:

### 1. Gestion des bénévoles :

- Ajouter / modifier / supprimer un bénévole

- Lister tous les bénévoles

- Attribuer un rôle (ex : admin, participant)

### 2. Gestion des collectes de déchets

- Enregistrer une collecte (date, lieu, bénévole responsable)

- Associer plusieurs types de déchets et leurs quantités

### 3. Gestion des déchets collectés

- Enregistrer les types et quantités de déchets collectés pour chaque collecte

## **Fonctionnalités bonus**:

- Accessibilité
- Systeme d'authentification, connexion securisée, deconnexion
- Tableau de bord et statistique

## **Fonctionnalités futures**:

- Eco-conception

- Déploiement

- Gestion mot de passe oublié lors de la connexion

- Gestion des sessions

<p align="center">

## **Prérequis**:

- PHP 8.3

- MySQL

- Serveur local (MAMP, WAMP ou LAMP)

- PHPMyAdmin

## **Installation**:

📌Cloner le dépôt ou télécharger les fichiers du projet : git@github.com:Evan69007/Projet_PHP.git

📌Placer les fichiers dans le répertoire web de votre serveur local (par exemple : htdocs pour XAMPP/MAMP).

📌Se connecter sur phpmyadmin

📌Créer la base de données gestion_collectes avant d’importer ton fichier, en utilisant la collation utf8mb4_general_ci

📌Importer le fichier gestion_collectes.sql : Importer > Parcourir les fichiers > gestion_collectes.sql > Exécuter

📌S’assurer que les tables de la base de données gestion_collectes ont bien été créées dans la colonne de gauche de votre interface phpmyadmin. Vous avez ainsi la structure de votre base de données et un premier jeu de données pour la peupler.

📌Créer un compte user sur "PHPMyAdmin" avec mdp et changer le nom d'utilisateur et mdp dans le fichier config.php

📌Dans le projet, vous trouverez un fichier hash_password.php .

1.  Modifiez le mot de passe

2.  Rendez-vous sur cette url http://localhost/Projet_php/association/php/hash_password.php et mettez de côté le “hash du mot de passe”

3.  Ajoutez VOTRE utilisateur·ice dans la base de donnée. Rendez-vous dans phpmyadmin, cliquez sur la table benevoles. Rendez-vous sur l’onglet sql et ajoutez execute cette requete :/

        INSERT INTO `benevoles`(`id`, `nom`, `email`, `mot_de_passe`, `role`) VALUES ('4','ton prénom','tonEmailDeTest@test.com','tonHAshDeMotDePasse','admin');

4.  Rendez-vous sur l’url http://localhost/login.php et renseigne ton email de test et ton mot de passe non hashé.

## **Stack technique**:

-PHP 8.3

-MySQL

-PHP PDO (requêtes SQL sécurisées)

-HTML

-Tailwind CSS

-Chart.js (pour les graphiques)

## **Auteurs**:

\*Neelab SADAT

\*Evan Aguttes-Rivelon

\*Elodie Sorce
