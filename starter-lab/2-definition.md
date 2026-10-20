# Définitions — Developer Starter Pack

## Qu'est-ce qu'un environnement de développement ?

Un environnement de développement est l'ensemble des outils utilisés pour écrire, exécuter, tester et maintenir un projet. Il comprend généralement un éditeur ou une IDE, un terminal, un runtime adapté au langage, un navigateur pour les projets web et un système de contrôle de version.

## Concepts essentiels

### Éditeur ou IDE

Un **éditeur de code** sert à écrire et modifier les fichiers du projet. Une **IDE** ajoute généralement des fonctions comme la navigation dans le code, le débogage et l'exécution de tâches. Visual Studio Code est un éditeur extensible ; les produits JetBrains sont des exemples d'IDE spécialisés.

### Terminal

Le **terminal** permet d'exécuter des commandes, de lancer un programme, de vérifier une installation et de répéter une procédure de manière claire.

### Runtime

Un **runtime** est le logiciel qui exécute un programme. Par exemple, Node.js exécute JavaScript en dehors du navigateur. Le runtime dépend du langage et du type de projet.

### Package manager

Un **package manager** installe et gère les dépendances d'un projet. npm accompagne généralement Node.js. D'autres écosystèmes utilisent Composer, pip ou Maven.

### Git

**Git** enregistre l'historique des modifications. Un commit représente un état identifié du projet. GitHub est un service qui peut héberger un dépôt Git et faciliter le partage du code.

### Navigateur et DevTools

Le navigateur affiche une application web. Ses **Developer Tools** permettent notamment d'inspecter le HTML, de lire la console et d'observer les requêtes réseau.

### Serveur local

Un serveur local rend le projet accessible depuis une adresse sur l'ordinateur, par exemple `http://localhost:5500`. Il permet de tester le comportement d'une page dans des conditions proches d'un site servi par un serveur.

## Fonctionnement général

Le travail quotidien suit souvent ce parcours :

```text
Choisir les outils → Écrire le code → Exécuter → Inspecter → Corriger → Committer
```

Chaque outil a un rôle précis. L'éditeur écrit le code, le runtime l'exécute, le navigateur montre le résultat et Git conserve les étapes importantes.

## À ne pas confondre

- **Éditeur** : aide à écrire le code ; il n'exécute pas nécessairement le programme.
- **Runtime** : exécute le programme ; il ne remplace pas l'éditeur.
- **Git** : suit l'historique local ; GitHub est une plateforme d'hébergement et de collaboration.
- **Dépendance** : code utilisé par le projet ; elle n'est pas forcément un outil installé globalement.

## Résumé

Un bon starter pack est petit, adapté au projet et vérifiable. Il doit permettre d'écrire, d'exécuter, d'inspecter et de sauvegarder un premier résultat.
