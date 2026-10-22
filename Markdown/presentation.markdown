---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #ffffff;
    color: #111827;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }
  h1, h2, h3 { color: #1d4ed8; letter-spacing: 0.5px; }
  section.light { background-color: #ffffff; color: #111827; }
  section.light h1, section.light h2, section.light h3 { color: #1d4ed8; }
  pre, code { background-color: #eff6ff; color: #111827; border-radius: 6px; }
  section.light pre, section.light code { background-color: #eff6ff; color: #111827; }
  table { width: 100%; border-collapse: collapse; }
  th { background-color: #2563eb; color: #ffffff; padding: 10px; }
  td { color: #111827; padding: 8px; border-bottom: 1px solid #bfdbfe; }
  section.light td { color: #111827; border-bottom: 1px solid #bfdbfe; }
  strong, a { color: #1d4ed8; }
---

# Markdown

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** rédiger des documents lisibles avec du texte brut et une syntaxe légère.
- **Périmètre :** titres, emphase, listes, liens, images, code, tableaux et tâches.
- **Outils :** éditeur de texte, aperçu Markdown et dépôt Git.

---
<!-- _class: light -->

## 2. Problems Encountered

- Oublier l'espace après `#` ou mélanger les niveaux de titres brouille la hiérarchie.
- Un bloc de code non fermé casse tout le rendu situé après lui.
- Un tableau sans ligne d'alignement n'est pas interprété correctement.

---

## 3. Solutions Implemented

- Utiliser une hiérarchie régulière : un seul titre principal, puis `##` et `###`.
- Fermer chaque bloc avec trois accents graves et déclarer son langage.
- Ajouter une ligne d'alignement explicite dans chaque tableau.
- Vérifier le rendu dans l'aperçu avant de publier le fichier.

---
<!-- _class: light -->

## Practical Implementation: document de profil

````markdown
# Votre nom

## À propos de moi

**Une courte description de votre profil.**

## Compétences

- Compétence 1
- Compétence 2
- Compétence 3

## Loisirs

1. Loisir 1
2. Loisir 2
3. Loisir 3

## Profil

[GitHub](https://github.com/)

## Code

```javascript
console.log("Hello Markdown!");
```
````

---

## Practical Implementation: éléments courants

````markdown
## Liste

- HTML
- CSS
- JavaScript

## Tableau

| Nom | Langage |
|:---|:---|
| HTML | Balisage |
| CSS | Style |
| JavaScript | Script |

## Tâches

- [x] HTML
- [x] CSS
- [ ] JavaScript
````

---
<!-- _class: light -->

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Structurer le document | Validé | Titres hiérarchisés |
| Formater le contenu | Validé | Listes, liens et emphase rendus |
| Ajouter du code | Validé | Fence `javascript` fermé |
| Publier un résultat lisible | Validé | Aperçu Markdown vérifié |
