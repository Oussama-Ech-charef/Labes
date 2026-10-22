---
name: marp-lab-presentation
description: Use when generating, adapting, or formatting any lab deliverable or technical assignment into a standardized Marp presentation
---

# Marp Lab Presentation Skill

## Overview
Adapt and compile any completed technical task, lab deliverable, or technical assignment into a modern, standardized, and high-impact Marp presentation (`lab-<topic>.md`).

This skill strictly enforces visual rhythm, technical precision, and a fixed 5-part slide architecture without superfluous metadata.

---

## When to Use

Use this skill when:
- Creating a final presentation for a lab, workshop, or technical assignment.
- Transforming code examples, debugging logs, or notes into a slide deck.
- Standardizing presentation deliverables across different technical modules.

Do NOT use for:
- Writing internal task specifications (use `task-structuring` instead).
- Writing standalone multi-file documentation (all deliverables must remain unified in the single presentation file).

---

## Mandatory Slide Architecture

Every presentation must be output as a single file `lab-<topic>.md` with `marp: true` and respect this sequential flow:

### Slide 1: Title (Lab Name Only)
- **Content:** The title / topic of the lab **only**.
- **STRICT PROHIBITION:** **Never** include author or presenter names, student IDs, organization names, dates, or decorative sub-headers on Slide 1 unless explicitly instructed.

### Slide 2: Lab Plan
- **Content:** The agenda formatted strictly as:
  ```markdown
  <!-- _class: light -->

  ## Lab Plan

  1. Introduction
  2. Problems Encountered
  3. Solutions Implemented
  ```

### Slide 3: Introduction
- Briefly describe the purpose, technical scope, and core objectives of the lab.
- List key technologies, concepts, tools, or syntax used.

### Slide 4: Problems Encountered
- Document real technical challenges, error messages, syntax pitfalls, or configuration issues faced during execution.
- If no incidents occurred, explicitly state: *"No blocking technical problems encountered during implementation."*

### Slide 5: Solutions Implemented
- Document concrete solutions, code fixes, and engineering best practices applied to resolve the problems described in Slide 4.

### Subsequent Slides: Practical Examples & Implementation
- Include full, runnable code blocks with declared syntax highlighting (`html`, `javascript`, `bash`, `php`, `json`, `sql`, etc.).
- Include Markdown tables with explicit column alignments (`:---`, `:---:`, `---:`).
- Integrate all exercises, diagrams, and explanations directly within the slides.
- **Rule:** Do NOT create external companion `.md` files or separate exercise files.

---

## Design & Formatting Standards

1. **Frontmatter Configuration:**
   Always start the file with:
   ```yaml
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
   ```

2. **Slide Delimiters:**
   - Always use `---` on a new line to separate slides.

3. **Alternating Visual Rhythm:**
   - Alternate between dark background slides (default) and light background slides (`<!-- _class: light -->`) to maintain audience focus and clear visual demarcation.

4. **Code & Syntax Declaration:**
   - Always specify the language tag on every code fence (e.g., ```` ```javascript ````, never bare ```` ``` ````).

---

## Output Template (`lab-<topic>.md`)

```markdown
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
  }
  section.light pre, section.light code {
    background-color: #e2e8f0;
    color: #0f172a;
  }
---

# [Titre du Lab Uniquement]

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Purpose & Scope:** Description concise des objectifs.
- **Technologies & Notions clés :**
  - Concept / Outil 1
  - Concept / Outil 2

---
<!-- _class: light -->

## 2. Problems Encountered

- **Incident technique 1 :** Description du problème et du message d'erreur.
- **Incident technique 2 :** Piège syntaxique ou limitation rencontrée.

---

## 3. Solutions Implemented

- **Résolution du problème 1 :** Correctif apporté et bonne pratique.
- **Résolution du problème 2 :** Configuration ajustée.

---
<!-- _class: light -->

## Practical Implementation: [Nom de l'exercice]

```javascript
// Exemple de code fonctionnel avec coloration
function calculateTotal(items) {
  return items.reduce((sum, item) => sum + item.price, 0);
}
```

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Setup & Configuration | ✅ Validé | Environnement opérationnel |
| Résolution des bugs | ✅ Validé | Tests unitaires passants |
| Livrable Marp | ✅ Validé | Fichier lab-<topic>.md généré |
```

---

## Red Flags & Anti-Patterns

| Interdit | Raison | Règle absolue |
|:---|:---|:---|
| Mettre son nom / ID sur la Slide 1 | Dégrade l'uniformité standard des livrables. | Slide 1 = Titre du lab uniquement. |
| Modifier la structure des 5 premières slides | Rompt la cohérence de l'évaluation du lab. | Respecter strictement Titre > Plan > Intro > Problèmes > Solutions. |
| Créer des fichiers markdown séparés | Éparpille les livrables. | Tout le code et les exemples doivent être intégrés dans la présentation Marp. |
| Omettre la coloration syntaxique | Code illisible sur grand écran. | Toujours déclarer le langage sur les blocs de code. |