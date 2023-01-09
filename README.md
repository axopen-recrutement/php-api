# Épreuve recrutement Axopen PHP / Symfony

Cette application est utilisée comme exercice de recrutement pour AXOPEN. Il ne représente en rien le niveau de qualité des développements d'AXOPEN.

## Qu'est ce que je dois faire ?

Dans cet exercice, il vous est demandé dans un premier temps, de relire le code et de le comprendre. 
Par la suite, l'objectif est de nous faire un retour sur la qualité du code ainsi qu'une liste des améliorations que vous pourriez apporter à l'application.

Les types de retour peuvent être liés à différentes thématiques, voici une liste non-exhaustive :
- Structure de l'application
- Syntaxe
- Logique
- Lisibilité
- Performance
- Bonnes pratiques


Une fois ces étapes effectuées, vous pouvez nous envoyer votre rapport sous différents formats : 
- Markdown
- Word
- Fichier texte

## Comment lancer l'application ?

> Note : Il n'est pas primordial de lancer l'application pour effectuer l'analyse de code.

Pour résumer, cette application est une API développée en langage PHP et utilisant le framework Symfony.   
Elle est fonctionnelle et demande les pré-requis suivants pour être opérationnelle et testable :
- PHP 8.1 ou +
- Base de données MariaDB
- Création d'une base de données `axopen_recrutement`
- Exécution des migrations SQL avec la commande symfony `php bin/console doctrine:migrations:migrate`
- Modifier la chaine de caractère du fichier `.env` pour correspondre avec votre base de données MariaDB.
- Lancer le projet avec la commande `php bin/console server:start` (la base de données va se créer toute seule).


## Que contient l'application ?

Il s'agit d'une API REST, qui permet les interactions suivantes :
- Récupérer un chantier aléatoire
- Récupérer un chantier par son numéro
- Créer un chantier
- Mettre à jour un chantier avec des valeurs aléatoires
- Récupérer un utilisateur par son matricule
- Retourner tous les utilisateurs

### Architecture du projet

Nous allons détailler rapidement ce qui se trouve dans chaque dossier.

- `config` contient toute la configuration.
- `migrations` contient les scripts de migration qui permettent de construire automatiquement la base de données au lancement de l'API.
- `public` contient le point d'entrée de l'API.
- `src/Controller` contient les controllers qui sont les points d'entrés HTTP de l'API.
- `src/Entity` contient les objets PHP qui représentent la base de données.
- `src/Repository` contient les interfaces qui permettent d'interagir avec la base de données.
- `src/Service` contient les services de l'application.

