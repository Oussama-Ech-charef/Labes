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

# Créer un prompt pour une tâche

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** rédiger un prompt clair et précis pour demander à une IA de réaliser une tâche.
- **Périmètre :** définir le contexte, l’objectif, les consignes et le résultat attendu, puis tester et améliorer le prompt.
- **Résultat attendu :** un prompt réutilisable, une réponse évaluable et une version améliorée après feedback.
- **Notions clés :** rôle, contexte, contraintes, format de sortie, critères de réussite et itération.

---
<!-- _class: light -->

## 2. Problems Encountered

- Une demande trop courte laisse l’IA deviner le contexte et produit une réponse générique.
- L’objectif, le public cible ou le niveau de détail peuvent rester ambigus.
- Sans format de sortie ni critères de réussite, il est difficile de vérifier la réponse.
- Un premier prompt peut sembler correct avant d’être testé sur un cas concret.

---

## 3. Solutions Implemented

- Structurer chaque prompt avec **rôle**, **contexte**, **objectif**, **consignes**, **format** et **critères**.
- Remplacer les verbes vagues par des actions observables : analyser, comparer, produire ou vérifier.
- Ajouter des contraintes mesurables : langue, longueur, public, structure et éléments obligatoires.
- Tester le prompt, relever les écarts, puis modifier une consigne à la fois.

---
<!-- _class: light -->

## Les éléments d’un prompt efficace

| Élément | Question à préciser | Exemple |
|:---|:---|:---|
| Rôle | Quelle expertise l’IA doit-elle adopter ? | Formateur débutant |
| Contexte | Quelle situation doit-elle comprendre ? | Un étudiant prépare un lab |
| Objectif | Quelle action doit-elle réaliser ? | Construire un plan d’exercice |
| Consignes | Quelles règles doit-elle respecter ? | Employer un français simple |
| Format | Comment présenter le résultat ? | Tableau en quatre colonnes |
| Critères | Comment juger la qualité ? | Complet, concret et vérifiable |

---

## Gabarit réutilisable

```text
Rôle : tu es [expertise ou rôle attendu].

Contexte : [informations utiles, public, niveau et situation].

Objectif : [résultat concret à produire].

Consignes :
1. [action précise à réaliser]
2. [contrainte de contenu ou de méthode]
3. [élément à vérifier]

Format attendu : [structure, longueur et langue].
Critères de réussite : [conditions observables].
``` 

---
<!-- _class: light -->

## Comparer deux formulations

### Prompt vague

```text
Explique comment écrire un bon prompt.
```

### Prompt clarifié

```text
Tu es formateur en intelligence artificielle pour des débutants.
Explique en français comment rédiger un prompt pour demander à une IA
de préparer un exercice informatique. Présente les six éléments du prompt,
puis donne un exemple complet. Utilise un tableau et reste sous 300 mots.
Termine par trois critères permettant de vérifier la qualité du prompt.
```

---

## Practical Implementation: rédiger la première version

```markdown
# Prompt à tester

Tu es un formateur pédagogique.
Le public est composé d'étudiants débutants qui découvrent les assistants IA.
Crée un exercice de 20 minutes pour apprendre à améliorer un prompt.
Le résultat doit contenir un objectif, les étapes, un exemple et une consigne
de vérification. Rédige en français simple, avec des titres courts.
```

**Vérification avant test :** le rôle, le public, la durée, la tâche, la langue et
les éléments attendus sont explicitement indiqués.

---

## Practical Implementation: préciser le résultat attendu

```text
Retourne exactement les sections suivantes :
1. Objectif de l'exercice : une phrase.
2. Étapes : quatre étapes numérotées.
3. Exemple : un prompt initial et sa version améliorée.
4. Vérification : trois questions auxquelles l'étudiant doit répondre.

N'invente pas de prérequis non nécessaires et signale toute information manquante.
```

Cette précision rend la réponse plus régulière et permet de la comparer aux
critères de réussite.

---

## Practical Implementation: tester et observer

```json
{
  "prompt_test": "Créer un exercice de 20 minutes pour améliorer un prompt.",
  "criteres": [
    "Le contexte et le public sont présents",
    "Les étapes sont numérotées",
    "Un exemple initial et amélioré est fourni",
    "La réponse est rédigée en français simple"
  ],
  "ecarts_observes": [
    "La réponse ne donne pas de durée pour chaque étape",
    "Le format de vérification est trop vague"
  ]
}
```

Le test doit décrire les écarts observés, pas seulement indiquer que la réponse
semble bonne.

---

## Practical Implementation: améliorer par itération

```text
Version 1 : créer un exercice de 20 minutes.
Version 2 : répartir la durée entre quatre étapes.
Version 3 : ajouter un livrable attendu et trois critères de réussite.
Version 4 : demander à l'IA de signaler les informations manquantes.
```

| Itération | Modification | Effet recherché |
|:---|:---|:---|
| V1 | Demande générale | Obtenir une première proposition |
| V2 | Durée par étape | Rendre l'activité réalisable |
| V3 | Livrable et critères | Faciliter l'évaluation |
| V4 | Gestion des manques | Éviter les suppositions |

---

## Exercice guidé

1. Choisir une tâche réelle : résumer un texte, corriger du code ou préparer un plan.
2. Écrire une première version en deux ou trois phrases.
3. Ajouter le contexte, le public, le format et au moins trois contraintes.
4. Tester le prompt avec un agent IA et conserver la réponse obtenue.
5. Comparer la réponse aux critères, puis produire une deuxième version.
6. Documenter la modification qui a le plus amélioré le résultat.

---
<!-- _class: light -->

## Fiche de restitution

```markdown
# Tâche choisie
Préparer un résumé accessible d'un article technique pour des débutants.

## Prompt initial
Résume cet article pour un débutant.

## Résultat initial
Le résumé est court, mais le public et les notions à expliquer ne sont pas
précisés.

## Écarts observés
- Les notions techniques ne sont pas définies.
- Le format et la longueur ne sont pas mesurables.

## Prompt amélioré
Tu es formateur technique. Résume l'article en français pour des débutants,
en 180 mots maximum. Définis les trois termes techniques indispensables,
utilise deux sous-titres et termine par une phrase qui résume l'idée principale.

## Ce qui a changé
- Ajout du rôle, du public, de la longueur, de la structure et du critère final.

## Résultat final et critères validés
- Le résumé respecte la longueur et explique les trois termes demandés.
```

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Définir le contexte et l’objectif | Validé | Les informations utiles sont explicites |
| Donner des consignes précises | Validé | Les actions et contraintes sont mesurables |
| Décrire le résultat attendu | Validé | Le format et les critères sont indiqués |
| Tester le prompt | Validé | Une réponse et des écarts sont conservés |
| Améliorer le prompt | Validé | Une version 2 justifie ses changements |

---

## À retenir

Un bon prompt réduit les suppositions de l’IA et rend sa réponse vérifiable.
La qualité vient de la précision des informations, du format demandé et de
l’itération après un test réel.
