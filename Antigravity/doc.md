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

# Antigravity

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** travailler avec un environnement d'agents IA en gardant le contrôle du projet.
- **Périmètre :** cadrage, planification, revue, exécution et vérification.
- **Principe :** l'agent accélère le travail ; la personne reste responsable de la portée et du résultat.

---
<!-- _class: light -->

## 2. Problems Encountered

- Les noms de menus, versions et chemins peuvent différer selon l'installation.
- Une demande trop générale peut provoquer des modifications hors périmètre.
- Une exécution non relue peut introduire une erreur difficile à repérer.
- Une règle ou une skill peut être ignorée si elle n'est pas explicitement prise en compte.

---

## 3. Solutions Implemented

- Décrire le résultat attendu, le contexte, la portée et les contraintes.
- Exiger un plan court avant toute modification.
- Relire le plan, exécuter une étape à la fois et vérifier le résultat.
- Demander un résumé des fichiers modifiés et des validations effectuées.

---
<!-- _class: light -->

## Practical Implementation: workflow contrôlé

```text
Planifier → Relire → Exécuter → Vérifier → Résumer
```

| Phase | Question de contrôle |
|:---|:---|
| Planifier | Quel résultat doit être obtenu ? |
| Relire | Quels fichiers sont autorisés ? |
| Exécuter | Chaque changement respecte-t-il la portée ? |
| Vérifier | Comment prouver que cela fonctionne ? |
| Résumer | Qu'est-ce qui a changé et pourquoi ? |

---

## Practical Implementation: prompt cadré

```text
Objectif : [ce qu'il faut construire ou corriger]
Contexte : [projet, langage, framework]
Portée : [fichiers autorisés, fichiers à ne pas toucher]
Contraintes : [règles, style, bibliothèques]
Processus : montrer un plan avant de modifier
Terminé quand : [critères de vérification]
Sortie : résumer les changements et les tests
```

---
<!-- _class: light -->

## Practical Implementation: règles et skills

| Élément | Rôle | Exemple de contrôle |
|:---|:---|:---|
| Règle | Consigne persistante du projet | Ne pas toucher à `.env` |
| Skill | Procédure spécialisée | Utiliser le format Marp d'un lab |
| Prompt | Demande ponctuelle | Modifier uniquement un fichier |

```text
Avant de commencer : lire les règles et la skill applicables.
Après l'exécution : vérifier les fichiers et le résultat attendu.
```

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Définir la portée | Validé | Prompt structuré |
| Contrôler l'exécution | Validé | Workflow en 5 phases |
| Utiliser les consignes | Validé | Règles et skills identifiées |
| Vérifier le livrable | Validé | Critères et résumé final |
