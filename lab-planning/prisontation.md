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
  strong, a {
    color: #1d4ed8;
  }
---

# Lab-Planing

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---
<!-- _class: light -->

## 1. Introduction

Un besoin rencontré pendant la réalisation d’un blog peut devenir un lab technique.

Chaque lab permet d’étudier une partie de la stack, de tester une technique ou d’évaluer une bibliothèque.

**Objectif :** partir d’un besoin et rédiger un plan pratique que l’apprenant peut réaliser et vérifier.

---
<!-- _class: light -->

## 2. Problems Encountered

- Un besoin trop large donne un lab difficile à terminer.
- Mélanger le problème et la solution empêche de comprendre ce qu’il faut réellement résoudre.
- Utiliser toutes les technologies dans chaque exercice ajoute une complexité inutile.
- Sans livrable ni critère, il est difficile de vérifier la réussite.

---

## 3. Solutions Implemented

Pour préparer un lab, définir :

1. **Le problème :** que faut-il résoudre pour le blog ?
2. **La solution :** quel travail l’apprenant doit-il faire et quelles étapes suivre ?
3. **La technologie :** que faut-il utiliser, tester ou évaluer, et pourquoi ?
4. **La validation :** quel livrable et quels critères montreront que le problème est résolu ?

---

## Problème ou solution ?

**Problème :** décrit le besoin ou la difficulté sans imposer la façon de la résoudre.

**Solution / travail à faire :** décrit les étapes concrètes qui permettront de répondre au besoin.

**Exemple :**

- Problème : les lecteurs ne peuvent pas commenter un article.
- Travail : ajouter un formulaire, valider les données et enregistrer le commentaire.

---

## Stack du blog — serveur et données

| Technologie | Exemple de lab |
|:---|:---|
| Laravel | Traiter un formulaire |
| PHP natif | Étudier une notion PHP |
| MySQL | Enregistrer des articles |
| JSON | Définir une réponse d’API |

Choisir seulement les technologies nécessaires au lab.

---

## Stack du blog — interfaces

| Technologie | Exemple de lab |
|:---|:---|
| JavaScript | Appeler une API |
| Alpine.js | Ajouter une interaction légère |
| Tailwind CSS | Mettre en forme une page |
| Preline UI | Intégrer un composant d’interface |
| Kotlin | Consommer l’API depuis Android |

Preline UI fournit des composants d’interface basés sur Tailwind CSS.

---

## Définitions utiles

- **Besoin :** fonctionnalité attendue par un utilisateur du blog.
- **Problème :** difficulté précise qui empêche de répondre au besoin.
- **Lab technique :** exercice limité qui permet d’apprendre en réalisant une tâche.
- **Critère de validation :** résultat observable qui confirme que le travail est terminé.

---

## Exemple : publier un commentaire

**Besoin :** les lecteurs doivent pouvoir réagir à un article.

**Problème :** un lecteur ne peut pas publier de commentaire sous un article.

**Travail à faire :**

1. Ajouter un formulaire à la page de l’article.
2. Valider les données.
3. Enregistrer le commentaire avec Laravel et MySQL.
4. Afficher le commentaire après l’envoi.

---

## Technologie et résultat attendu

**Technologies :** Laravel et MySQL pour le serveur et le stockage ; Blade, Tailwind CSS et Preline UI pour construire le formulaire et ses composants.

Ajouter JavaScript ou Alpine.js uniquement si une interaction côté navigateur est demandée.

**Critères de validation :**

- un commentaire valide est enregistré pour le bon article ;
- un champ vide est refusé avec un message compréhensible ;
- le commentaire publié s’affiche sur la page.

---

## À vous de pratiquer

Choisissez un besoin réel du blog, par exemple la recherche d’articles ou l’ajout d’une image.

Complétez ce plan :

1. **Besoin :** qui a besoin de quoi ?
2. **Problème :** qu’est-ce qui manque ou ne fonctionne pas ?
3. **Travail à faire :** quelles étapes l’apprenant va-t-il suivre ?
4. **Technologie :** laquelle utiliser ou évaluer, et pourquoi ?
5. **Livrable :** qu’est-ce que l’apprenant doit produire ?
6. **Validation :** comment vérifier que le problème est résolu ?

Gardez un objectif limité. N’ajoutez pas une technologie si elle n’est pas utile au problème.

---

## À retenir

**Besoin du blog → problème clair → étapes de solution → technologie adaptée → résultat vérifiable**

Un lab porte sur un objectif limité : n’ajoutez pas toute la stack si elle n’est pas nécessaire.
