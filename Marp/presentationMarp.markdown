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
  h1, h2, h3 { color: #38bdf8; letter-spacing: 0.5px; }
  section.light { background-color: #f8fafc; color: #0f172a; }
  section.light h1, section.light h2, section.light h3 { color: #0284c7; }
  pre, code { background-color: #1e293b; color: #e2e8f0; border-radius: 6px; }
  section.light pre, section.light code { background-color: #e2e8f0; color: #0f172a; }
  table { width: 100%; border-collapse: collapse; }
  th { background-color: #0284c7; color: #ffffff; padding: 10px; }
  td { padding: 8px; border-bottom: 1px solid #334155; }
  section.light td { border-bottom: 1px solid #cbd5e1; }
---

# Marp

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** transformer un fichier Markdown en présentation avec Marp.
- **Périmètre :** frontmatter, thèmes, pagination, séparateurs de slides et coloration du code.
- **Résultat attendu :** un deck lisible dans l'aperçu Marp et exportable en PDF ou HTML.

---
<!-- _class: light -->

## 2. Problems Encountered

- Sans `marp: true`, le fichier reste un document Markdown ordinaire.
- Sans séparateur `---`, plusieurs contenus se retrouvent sur la même slide.
- Des fences non fermés ou sans langage rendent le code ambigu dans la présentation.

---

## 3. Solutions Implemented

- Ajouter un frontmatter YAML minimal et stable au début du fichier.
- Utiliser un séparateur sur sa propre ligne pour chaque nouvelle slide.
- Déclarer `javascript`, `bash`, `markdown` ou le langage réellement utilisé.
- Vérifier l'ordre des slides et l'aperçu avant l'export.

---
<!-- _class: light -->

## Practical Implementation: deck minimal

````markdown
---
marp: true
theme: default
paginate: true
size: 16:9
---

# Slide 1

---

## Slide 2

- Un message principal
- Une démonstration courte
````

Le frontmatter configure le document ; `---` sépare les slides.

---

## Practical Implementation: contenu technique

```bash
# Aperçu local avec Marp CLI déjà installé
npx --no-install @marp-team/marp-cli presentation.md --html
```

```javascript
const slides = ["Introduction", "Démonstration", "Conclusion"];
console.log(slides.join(" → "));
```

Chaque bloc garde son langage pour améliorer la lecture et la vérification.

---
<!-- _class: light -->

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Activer Marp | Validé | `marp: true` présent |
| Créer plusieurs slides | Validé | Séparateurs `---` vérifiés |
| Présenter du code | Validé | Fences avec langage déclaré |
| Préparer l'export | Validé | Aperçu ou commande CLI vérifié |
