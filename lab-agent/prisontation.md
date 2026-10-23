---
marp: true
theme: default
paginate: true
size: 16:9
style: |
  section {
    box-sizing: border-box;
    background-color: #ffffff;
    color: #111827;
    font-family: 'Inter', system-ui, sans-serif;
    padding: 40px 60px;
    line-height: 1.22;
  }
  h1, h2, h3 {
    font-family: 'Inter', system-ui, sans-serif;
    color: #1d4ed8;
    letter-spacing: 0.5px;
  }
  section.light {
    background-color: #ffffff;
    color: #111827;
  }
  section.light h1, section.light h2, section.light h3 {
    color: #1d4ed8;
  }
  pre, code {
    background-color: #eff6ff;
    color: #111827;
    border-radius: 6px;
    font-family: 'Fira Code', 'Consolas', monospace;
  }
  pre {
    font-size: 0.72em;
    line-height: 1.16;
    white-space: pre-wrap;
    overflow-wrap: anywhere;
  }
  section.light pre, section.light code {
    background-color: #eff6ff;
    color: #111827;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9em;
  }
  th {
    background-color: #2563eb;
    color: #ffffff;
    padding: 6px 8px;
  }
  td {
    color: #111827;
    padding: 5px 8px;
    border-bottom: 1px solid #bfdbfe;
  }
  section.light td {
    color: #111827;
    border-bottom: 1px solid #bfdbfe;
  }
  strong, a { color: #1d4ed8; }
---

# lab-agent

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

Un **Skill** est un ensemble réutilisable d'instructions, d'exemples et, si besoin, de ressources qui aide un agent IA à réaliser une tâche.

Dans ce lab, nous créons un Skill adapté à une tâche réelle, puis nous vérifions son fonctionnement dans **Antigravity** et **GitHub Copilot pour VS Code**.

### Objectifs

- Décrire une tâche et son résultat attendu.
- Créer un `SKILL.md` clair et réutilisable.
- Tester et améliorer le Skill dans les deux outils.

---
<!-- _class: light -->

## 2. Problems Encountered

- Une tâche décrite de façon vague produit des résultats irréguliers.
- Des instructions trop longues ou trop générales rendent le Skill difficile à suivre.
- Un Skill placé dans un emplacement non reconnu peut ne pas être découvert.
- Un Skill détecté peut quand même produire un résultat incomplet ou incorrect.
- Les deux agents peuvent proposer des commandes et des preuves différentes.

---
<!-- _class: light -->

## 3. Solutions Implemented

- Définir une tâche précise, ses étapes et le livrable attendu.
- Écrire un Skill court, spécialisé, testable et situé dans un chemin documenté.
- Utiliser la même demande, le même exemple et les mêmes critères dans les deux outils.
- Vérifier le résultat, documenter les preuves, puis améliorer les instructions.

---

## 1. Choisir une tâche

Choisir une tâche déjà réalisée et que l'on pourrait refaire, par exemple :

- rédiger une fiche de révision à partir de notes ;
- résumer un document selon un format précis ;
- vérifier une liste de fichiers selon des critères.

Avant d'écrire le Skill, noter :

1. le contexte nécessaire ;
2. les étapes à suivre ;
3. les règles à respecter ;
4. le résultat attendu et la façon de le vérifier.

---

## 2. Créer le Skill

Dans ce dépôt, les copies du Skill sont conservées dans les emplacements reconnus par le projet :

```text
.github/skills/lab-adaptation/SKILL.md
.agent/skills/lab-adaptation/SKILL.md
```

Pour un nouveau Skill, créer un dossier au nom court et un fichier `SKILL.md`. Le fichier commence par un frontmatter YAML avec un nom et une description qui indiquent quand utiliser le Skill.

---

## 3. Écrire des instructions utiles

Exemple de structure à adapter à une tâche précise :

```markdown
---
name: fiche-revision
description: Crée une fiche de révision concise à partir de notes de cours.
---

# Fiche de révision

## Étapes
1. Repérer les idées et termes importants.
2. Les organiser par thème sans inventer d'information.
3. Ajouter quelques questions de révision.

## Résultat attendu
- Une fiche en français avec des titres et des listes courtes.
- Une section finale de questions.
- Signaler les informations manquantes.
```

Un Skill doit décrire une compétence ou un processus précis, pas toutes les demandes possibles.

---

## 4. Tester dans Antigravity

1. Ouvrir le projet contenant le `SKILL.md`.
2. Démarrer une conversation et demander le Skill par son nom ou sa commande.
3. Donner un petit exemple représentatif de la tâche.
4. Vérifier que le Skill est pris en compte et que le résultat respecte ses instructions.

Si le Skill n'est pas détecté, vérifier son chemin, son nom, son frontmatter et les règles de découverte de la version utilisée.

---

## 5. Tester dans GitHub Copilot pour VS Code

1. Ouvrir le même projet dans VS Code et sélectionner l'agent Copilot.
2. Vérifier le Skill dans les personnalisations ou avec `/skills` si cette commande est disponible.
3. Demander exactement la même tâche avec le même exemple.
4. Vérifier le format, les règles et le résultat attendu.

Dans ce dépôt, la référence principale est `.github/skills/lab-adaptation/SKILL.md`. La découverte peut varier selon l'agent et le mode d'utilisation.

---

## 6. Évaluer et améliorer

Pour chaque outil, vérifier :

- le Skill a-t-il été découvert ou invoqué ?
- les étapes et les règles ont-elles été respectées ?
- le format de sortie est-il correct ?
- des informations ont-elles été inventées ou oubliées ?

Corriger les instructions qui posent problème, puis refaire le test dans les deux outils avec des critères identiques.

---

## Exercice et livrables

Créer un Skill pour une tâche déjà réalisée et fournir :

1. un dossier contenant `SKILL.md` ;
2. un exemple d'entrée et le résultat attendu ;
3. un test documenté dans Antigravity ;
4. le même test documenté dans GitHub Copilot pour VS Code ;
5. une amélioration apportée après comparaison des résultats.

---

## Scénario commun de validation

```text
Contexte : le dépôt contient une présentation Marp à produire.
Objectif : créer lab-agent/prisontation.md sur les Skills et les agents IA.
Contraintes : lire lab-adaptation, respecter les cinq premières slides et nommer les code fences.
Vérification : contrôler le frontmatter, les sections, les tableaux et l'absence de débordement.
Sortie : résumer les changements, les tests et les limites rencontrées.
```

Le même scénario réduit le biais lié à la formulation de la demande et rend la comparaison reproductible.

---
<!-- _class: light -->

## Matrice de validation croisée

| Critère | Antigravity | GitHub Copilot | Preuve attendue |
|:---|:---:|:---:|:---|
| Skill lu avant l'action | À vérifier | À vérifier | Référence explicite au fichier |
| Portée respectée | À vérifier | À vérifier | Un seul livrable demandé |
| Structure Marp | À vérifier | À vérifier | Frontmatter et slides conformes |
| Résultat produit | À vérifier | À vérifier | Format et contenu attendus |

---
<!-- _class: light -->

## Matrice de validation croisée — suite

| Critère | Antigravity | GitHub Copilot | Preuve attendue |
|:---|:---:|:---:|:---|
| Code et tableaux | À vérifier | À vérifier | Fences nommées et tableaux lisibles |
| Tests exécutés | À vérifier | À vérifier | Commandes ou contrôles reproductibles |
| Limites signalées | À vérifier | À vérifier | Blocages explicitement documentés |

Une cellule n'est validée que lorsqu'une preuve observable est conservée.

---

## Résultats du lab

- **Livrable :** `lab-agent/prisontation.md`, présentation Marp autonome.
- **Skill appliqué :** `lab-adaptation`, utilisé pour la structure, les critères et la vérification.
- **Contrôles locaux :** structure Marp, code fences, tableaux et rendu vérifiés.
- **Antigravity :** test préparé ; le lancement dépend de l'autorisation Computer Use de la session.
- **Copilot :** test préparé dans VS Code ; la preuve finale doit être complétée dans l'interface.
- **Limite :** les deux résultats d'exécution doivent être conservés pour compléter la matrice.

---
<!-- _class: light -->

## À retenir

Un Skill efficace est **spécialisé, clair, réutilisable et vérifiable**.

Créez un Skill adapté à chaque tâche réalisée, testez-le dans Antigravity et dans GitHub Copilot pour VS Code, puis améliorez-le selon les résultats.

### Documentation

- [Antigravity Skills](https://antigravity.google/docs/skills)
- [Agent Skills dans VS Code](https://code.visualstudio.com/docs/agent-customization/agent-skills)
