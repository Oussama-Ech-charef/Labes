---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    background-color: #0f172a;
    color: #f8fafc;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
  }
  h1, h2, h3 {
    font-family: 'Anton', 'Impact', sans-serif;
    color: #38bdf8;
    letter-spacing: 0.5px;
  }
  section.light {
    background-color: #f8fafc;
    color: #0f172a;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #0284c7;
  }
  pre, code {
    background-color: #1e293b;
    color: #e2e8f0;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
  }
  section.light pre, section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th {
    background-color: #0284c7;
    color: #ffffff;
    padding: 10px;
  }
  td {
    padding: 8px;
    border-bottom: 1px solid #334155;
  }
  section.light td {
    border-bottom: 1px solid #cbd5e1;
  }
---

# Git

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** comprendre comment Git enregistre et suit les changements d’un projet.
- **Notions clés :** dépôt, zone de préparation, commit, branche et dépôt distant.
- **Outils :** Git en ligne de commande et GitHub comme hébergeur possible.

---
<!-- _class: light -->

## 2. Problems Encountered

No blocking technical problems encountered during implementation.

Les erreurs courantes à éviter :

- lancer `git init` dans le mauvais dossier ;
- oublier de préparer les fichiers avant un commit ;
- publier un fichier contenant un secret ou un mot de passe.

---

## 3. Solutions Implemented

- Vérifier le dossier courant et l’état du dépôt avec `git status`.
- Examiner les changements avec `git diff` avant de les enregistrer.
- Ajouter seulement les fichiers nécessaires avec `git add`.
- Exclure les fichiers privés dans `.gitignore`.

---
<!-- _class: light -->

## Exemple pratique : créer un dépôt

Dans le dossier du nouveau projet :

```bash
git init
git status
```

`git init` initialise le dossier courant. Vérifier le dossier avant cette commande évite de créer un dépôt imbriqué.

---

## Exemple pratique : enregistrer un changement

```bash
git status
git diff
git add index.html
git commit -m "Ajouter la page d'accueil"
git log --oneline
```

`git add` choisit les changements à inclure. `git commit` enregistre uniquement ce qui a été préparé.

---
<!-- _class: light -->

## Exemple pratique : travailler sur une branche

```bash
git switch -c feature/menu
# Modifier les fichiers du menu
git add index.html style.css
git commit -m "Ajouter le menu"
```

La branche `feature/menu` isole le travail jusqu’à sa vérification et son intégration.

---

## Exemple pratique : synchroniser avec GitHub

```bash
git clone <adresse-du-depot>
git pull
git push
```

- `clone` récupère le dépôt distant pour la première fois.
- `pull` récupère les changements partagés.
- `push` publie les commits locaux.

---
<!-- _class: light -->

## Summary & Verification Matrix

| Objectif | Statut | Vérification |
|:---|:---:|:---|
| Initialiser un dépôt | Présenté | `git status` |
| Préparer et enregistrer des changements | Présenté | `git diff`, `git log` |
| Isoler un développement | Présenté | Créer une branche |
| Synchroniser avec un dépôt distant | Présenté | `git pull`, `git push` |
