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

# What is a Lab?

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** apprendre un sujet, vérifier sa compréhension et transmettre une explication claire.
- **Périmètre :** recherche, lecture, mise en pratique, questions et restitution.
- **Notions clés :** source fiable, prise de notes, exemple, feedback et itération.

---
<!-- _class: light -->

## 2. Problems Encountered

- Un sujet peut rester trop vague si aucune question précise n'est formulée.
- Une source isolée peut être incomplète ou difficile à vérifier.
- Une explication peut reproduire du jargon sans démontrer la compréhension.

---

## 3. Solutions Implemented

- Définir une question et un résultat attendu avant de chercher.
- Comparer plusieurs sources et noter les points qui divergent.
- Tester l'idée avec un exemple, puis l'expliquer avec ses propres mots.
- Utiliser les questions restantes comme prochaine boucle d'apprentissage.

---
<!-- _class: light -->

## Practical Implementation: boucle d'apprentissage

```text
Question → Recherche → Lecture → Exemple → Explication → Feedback
    ↑                                                       ↓
    └────────────── nouvelle question si nécessaire ───────┘
```

| Étape | Action vérifiable | Résultat attendu |
|:---|:---|:---|
| Question | Écrire une question précise | Périmètre défini |
| Recherche | Comparer des sources fiables | Notes sourcées |
| Exemple | Construire un cas simple | Compréhension testable |
| Explication | Enseigner sans jargon inutile | Retour exploitable |

---

## Practical Implementation: fiche de validation

```markdown
# Sujet étudié

## Question de départ
...

## Ce que j'ai compris
- ...

## Exemple vérifié
...

## Ce qui reste à clarifier
- ...

## Feedback reçu et amélioration suivante
- ...
```

---
<!-- _class: light -->

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Définir une question | Validé | Question écrite avant la recherche |
| Vérifier les sources | Validé | Notes comparées |
| Tester par un exemple | Validé | Cas concret reproductible |
| Transmettre clairement | Validé | Explication relue après feedback |
