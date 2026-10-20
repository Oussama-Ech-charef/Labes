# Pratique — Developer Starter Pack

## Objectif

Installer les outils de base, créer une page **Hello World**, observer son fonctionnement dans le navigateur et enregistrer le travail avec Git.

## 1. Préparer l'environnement

Installer ou vérifier les outils suivants :

- un éditeur ou une IDE, par exemple [Visual Studio Code](https://code.visualstudio.com/docs/getstarted/overview) ;
- [Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) ;
- un navigateur avec les Developer Tools ;
- [Node.js](https://nodejs.org/en/download) seulement si le projet utilise JavaScript et npm.

Dans le terminal, vérifier les outils disponibles :

```bash
git --version
node --version
npm --version
```

Les commandes `node` et `npm` sont optionnelles pour cet exercice. Si elles ne sont pas installées, continue avec l'éditeur, le navigateur et Git.

## 2. Créer le premier projet

Créer un dossier nommé `developer-starter-pack`, puis ajouter un fichier `index.html` :

```html
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Developer Starter Pack</title>
  </head>
  <body>
    <h1>Hello World</h1>
    <p id="status">Le projet est prêt.</p>
    <button id="check-button">Tester JavaScript</button>
    <script src="app.js"></script>
  </body>
</html>
```

Ajouter ensuite `app.js` :

```js
const button = document.querySelector('#check-button');
const status = document.querySelector('#status');

button.addEventListener('click', () => {
  status.textContent = 'JavaScript fonctionne correctement.';
});
```

## 3. Démarrer et vérifier

Ouvrir le dossier dans l'éditeur, puis ouvrir `index.html` dans le navigateur. Si un serveur local est disponible, utiliser-le de préférence. Avec Python installé, une possibilité est :

```bash
python -m http.server 5500
```

Ouvrir ensuite `http://localhost:5500`.

Vérifier les éléments suivants dans les Developer Tools :

1. **Elements** : le titre, le paragraphe et le bouton sont présents ;
2. **Console** : aucune erreur n'est affichée ;
3. **Network** : `index.html` et `app.js` sont chargés ;
4. cliquer sur le bouton : le message change.

## 4. Enregistrer le travail avec Git

Depuis le dossier du projet :

```bash
git init
git add index.html app.js
git commit -m "Create developer starter workspace"
git log --oneline -1
```

Le dernier commit doit apparaître dans l'historique.

## 5. Autoformation

Consulter les ressources suivantes :

- [Visual Studio Code — Get started](https://code.visualstudio.com/docs/getstarted/overview) ;
- [Git — Installing Git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) ;
- [MDN — Basic HTML syntax](https://developer.mozilla.org/en-US/docs/Learn_web_development/Core/Structuring_content/Basic_HTML_syntax).

Répondre ensuite aux questions suivantes :

1. Quelle est la différence entre un éditeur et un runtime ?
2. Pourquoi utiliser les Developer Tools ?
3. Que contient un commit Git ?
4. Dans quel cas Node.js et npm deviennent-ils nécessaires ?

### Défi

Ajouter `style.css`, modifier l'apparence du titre et créer un deuxième commit. Puis vérifier dans l'onglet **Network** que la feuille de style est bien chargée.

## Validation

- [ ] Les outils nécessaires sont installés ou vérifiés.
- [ ] La page affiche `Hello World`.
- [ ] Le bouton modifie le message sans erreur dans la console.
- [ ] `index.html` et `app.js` sont chargés correctement.
- [ ] Le travail est enregistré dans un commit Git.
- [ ] Les réponses de l'autoformation sont rédigées.
- [ ] Le défi CSS est réalisé ou expliqué.
