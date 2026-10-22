---
marp: true
theme: default
size: 16:9
paginate: true
style: |
  section {
    font-family: Aptos, Arial, sans-serif;
    background: #ffffff;
    color: #263746;
    padding: 54px 68px;
  }
  h1 {
    color: #155b82;
    font-size: 34px;
    border-bottom: 1px solid #d8e5ed;
    padding-bottom: 10px;
  }
  h2 {
    color: #155b82;
  }
  strong {
    color: #155b82;
  }
  code {
    background: #f0f5f8;
    color: #155b82;
  }
  table { font-size: 21px; }
  li { margin: 12px 0; }
  section.lead {
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: #174a70;
    color: #ffffff;
    text-align: center;
  }
  section.lead h1 {
    color: #ffffff;
    border: 0;
    font-size: 52px;
  }
  section.lead strong { color: #ffffff; }
---

<!-- _class: lead -->

# Lab-Starter

**Préparer son environnement de développement**

Git · Windows · VS Code 

---

# Plan
1. Les problèmes
2. Les solutions
3. les etapes pour resoudre chaque problèmes

---

# 1. Les problèmes

- **Git** : le projet n'est pas initialisé, les changements ne sont pas suivis.
- **Fichiers cachés** : `.gitignore` ou `.env` n'apparaissent pas dans l'Explorateur.
- **Extensions cachées** : `README.md` apparaît seulement comme `README`.
- **TODO** : les tâches à faire sont dispersées dans le code.
- **Aperçu web** : ouvrir et actualiser manuellement les pages HTML.

---

# 2. Les solutions

| Problème | Solution |
|---|---|
| Initialiser Git | Source Control de VS Code ou `git init` |
| Voir les fichiers cachés | Explorateur Windows : **Éléments masqués** |
| Voir `.md`, `.js`, `.php`… | Explorateur Windows : **Extensions de noms de fichiers** |
| Repérer les TODO dans le code | Extension **[Better Todo Tree](https://marketplace.visualstudio.com/items?itemName=FanaticPythoner.better-todo-tree)** |
| Prévisualiser HTML en direct | Extension **[Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer)** |

---
# 3. les ètapes pour resoudre chaque problèmes
---
# Initialiser Git


1. Ouvrir le dossier du projet dans VS Code.
2. Ouvrir **Source Control** avec `Ctrl + Shift + G`.
3. Cliquer sur **Initialize Repository**.
4. Alternative dans le terminal :

```bash
git init
```


---

# Afficher les fichiers cachés

Pour voir des fichiers comme `.gitignore` ou `.env` :

1. Ouvrir l'Explorateur de fichiers avec `Win + E`.
2. Cliquer sur **Affichage**.
3. Choisir **Afficher** → **Éléments masqués**.
4. Les fichiers cachés deviennent visibles.

---

# Afficher les extensions de fichiers

Pour distinguer `README.md` de `README.md.txt` :

1. Ouvrir l'Explorateur de fichiers avec `Win + E`.
2. Cliquer sur **Affichage** → **Afficher**.
3. Activer **Extensions de noms de fichiers**.
4. Vérifier le vrai nom du fichier, par exemple `README.md`.

---

# Repérer les tâches avec Better Todo Tree

**Rôle :** recherche les commentaires `TODO` et `FIXME`, les regroupe dans une arborescence et permet d’ouvrir directement la ligne concernée.

1. Ouvrir **Extensions** : `Ctrl + Shift + X`.
2. Rechercher **Better Todo Tree** (éditeur : FanaticPythoner), puis installer.
3. Ouvrir le dossier du projet dans VS Code.
4. Ajouter des commentaires dans le code :

```js
// TODO: ajouter la validation
// FIXME: corriger cette erreur
```

5. Cliquer sur l’icône **Better Todo Tree** dans la barre latérale.
6. Cliquer sur une annotation pour ouvrir le fichier à la ligne correspondante.

---


# Prévisualiser avec Live Server

1. Ouvrir **Extensions** : `Ctrl + Shift + X`.
2. Rechercher **Live Server** (éditeur : Ritwick Dey), puis installer.
3. Ouvrir le projet contenant `index.html`.
4. Cliquer sur **Go Live** en bas de VS Code.
5. La page s'ouvre dans le navigateur et s'actualise après les modifications enregistrées.

> Live Server sert les pages statiques HTML , il n'exécute pas le code PHP.
