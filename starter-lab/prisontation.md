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

# Lab-Starter

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** préparer un environnement de développement reproductible.
- **Périmètre :** Git, Windows, VS Code, fichiers cachés, annotations et aperçu HTML.
- **Résultat attendu :** un projet lisible, suivi par Git et prévisualisable rapidement.

---
<!-- _class: light -->

## 2. Problems Encountered

- Le projet peut ne pas être initialisé ou les changements peuvent rester non suivis.
- `.gitignore`, `.env` et les extensions de fichiers peuvent être masqués dans l'Explorateur.
- Les commentaires `TODO` sont difficiles à retrouver sans outil.
- Une page HTML doit parfois être actualisée manuellement après chaque modification.

---

## 3. Solutions Implemented

- Vérifier le dossier puis lancer `git init` et `git status`.
- Activer les éléments masqués et les extensions de noms de fichiers dans Windows.
- Utiliser Better Todo Tree pour regrouper `TODO` et `FIXME`.
- Utiliser Live Server pour prévisualiser les pages statiques HTML.

---
<!-- _class: light -->

## Practical Implementation: initialiser Git

```bash
git init
git status
git add README.md
git commit -m "Initialiser le projet"
```

Avant `git init`, confirmer que le terminal se trouve bien à la racine du projet.

---

## Practical Implementation: outils VS Code

| Besoin | Action | Vérification |
|:---|:---|:---|
| Fichiers cachés | Activer les éléments masqués | `.gitignore` visible |
| Extensions | Activer les extensions de noms | `README.md` identifiable |
| Tâches | Installer Better Todo Tree | `TODO` listés |
| Aperçu HTML | Installer Live Server puis **Go Live** | Page ouverte dans le navigateur |

```javascript
// TODO: ajouter la validation
// FIXME: corriger cette erreur
```

---
<!-- _class: light -->

## Practical Implementation: limite de Live Server

Live Server sert les pages statiques HTML, CSS et JavaScript. Il n'exécute pas directement le code PHP.

```html
<!doctype html>
<html lang="fr">
  <body>
    <h1>Environnement prêt</h1>
    <script>console.log("Aperçu actif");</script>
  </body>
</html>
```

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Suivre le projet | Validé | `git status` fonctionne |
| Voir les vrais noms de fichiers | Validé | Extensions affichées |
| Retrouver les tâches | Validé | `TODO` et `FIXME` regroupés |
| Prévisualiser une page | Validé | Live Server ouvre `index.html` |
