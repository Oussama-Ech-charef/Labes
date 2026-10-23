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
  }
  th {
    background-color: #2563eb;
    color: #ffffff;
    padding: 10px;
  }
  td {
    color: #111827;
    padding: 8px;
    border-bottom: 1px solid #bfdbfe;
  }
  section.light td {
    color: #111827;
    border-bottom: 1px solid #bfdbfe;
  }
  strong, a { color: #1d4ed8; }
---

# Créer et tester des Skills avec des agents IA

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** créer un Skill réutilisable qui aide un agent IA à structurer et vérifier une tâche technique.
- **Périmètre :** consignes persistantes, contexte, format attendu, critères de réussite et tests croisés.
- **Agents ciblés :** Antigravity et GitHub Copilot dans VS Code.
- **Résultat attendu :** un Skill lisible, un prompt de test identique et une grille de vérification comparable.
- **Notions clés :** frontmatter YAML, Markdown, portée, validation, itération et traçabilité.

---
<!-- _class: light -->

## 2. Problems Encountered

- Les agents n'interprètent pas toujours de la même façon une consigne courte ou ambiguë.
- Un Skill peut être découvert mais ignoré si son nom, sa description ou son emplacement ne sont pas explicites.
- Les critères de réussite doivent être observables pour comparer Antigravity et Copilot.
- Les interfaces et commandes disponibles peuvent différer selon la configuration locale de l'agent.
- Dans cet environnement, Antigravity est installé mais son ouverture n'est pas autorisée par le contrôle Windows.
- Le CLI Marp n'est pas disponible localement et le paquet n'est pas présent dans le cache hors ligne de `npx`.

---

## 3. Solutions Implemented

- Définir un frontmatter minimal avec un nom stable et une description déclenchable.
- Décomposer la procédure en étapes : lire le contexte, planifier, modifier, tester et résumer.
- Utiliser un même scénario de test et une matrice commune pour les deux agents.
- Exiger une preuve concrète : fichier produit, format respecté, test exécuté et limites signalées.
- Remplacer le rendu indisponible par des contrôles structurels locaux, en conservant le rendu CI comme validation complémentaire.

---
<!-- _class: light -->

## Anatomy of a Skill

| Élément | Rôle | Exemple de contrôle |
|:---|:---|:---|
| `name` | Identifie le Skill | Nom court et sans ambiguïté |
| `description` | Déclenche le bon usage | Verbe d'action + contexte |
| Instructions | Décrit la méthode | Étapes ordonnées et limites |
| Critères | Rend le résultat vérifiable | Fichier, test et format attendus |
| Cas limites | Évite les suppositions | Demander une précision ou signaler un blocage |

---

## Practical Implementation: Skill minimal

```markdown
---
name: task-structuring
description: Use when transforming a technical request into a scoped, testable task
---

# Task Structuring

1. Read the request and identify the intended outcome.
2. List the files, tools and constraints that are in scope.
3. Produce a short plan before making changes.
4. Implement only the requested change.
5. Run the smallest relevant verification and report evidence.

## Done when

- The requested artifact exists.
- The acceptance criteria are checked.
- Remaining limitations are stated explicitly.
```

Ce format peut être placé dans le répertoire de Skills reconnu par l'agent.

---
<!-- _class: light -->

## Practical Implementation: scénario de test commun

```text
Contexte : le dépôt contient une présentation Marp à produire.
Objectif : créer lab-agent/prisontation.md sur le thème « Skills et agents IA ».
Contraintes : respecter le Skill lab-adaptation, garder un unique livrable Markdown,
utiliser les cinq premières slides imposées et déclarer le langage de chaque code fence.
Vérification : contrôler le frontmatter, le nombre de sections, les séparateurs de slides,
les tableaux alignés et l'absence de nom sur la slide 1.
Sortie : résumer les changements, les tests et les limites rencontrées.
```

Le même scénario réduit le biais lié à la formulation de la demande.

---

## Practical Implementation: test dans Antigravity

```text
Lis les règles du projet et le Skill lab-adaptation avant d'agir.
Applique le scénario de test commun à lab-agent/prisontation.md.
Commence par un plan de trois étapes, puis réalise uniquement le livrable demandé.
À la fin, vérifie la structure Marp, les cinq premières slides et les blocs de code.
Retourne les fichiers modifiés, les commandes de validation et les éventuelles limites.
```

**Preuve attendue :** l'agent cite le Skill utilisé et fournit une vérification reproductible.

---
<!-- _class: light -->

## Practical Implementation: test dans GitHub Copilot

```text
Dans VS Code, lis .github/skills/lab-adaptation/SKILL.md puis inspecte le dépôt.
Applique exactement le scénario de test commun à lab-agent/prisontation.md.
Ne crée pas de fichier Markdown compagnon et ne modifie pas les fichiers existants sans nécessité.
Après l'édition, lance les vérifications disponibles et signale ce qui n'est pas exécutable localement.
Réponds avec : fichiers modifiés, contrôles passés, contrôles non disponibles et limites.
```

**Preuve attendue :** Copilot respecte la portée, conserve les consignes Marp et explique les contrôles.

---

## Vérifications automatisables

```powershell
$path = (Resolve-Path .\lab-agent\prisontation.md).Path
$lab = [System.IO.File]::ReadAllText($path, [System.Text.Encoding]::UTF8)
$fence = ([char]96).ToString() + ([char]96).ToString() + ([char]96).ToString()
$lines = $lab -split "`r?`n"
$openFences = @($lines | Where-Object { $_ -match "^$fence[A-Za-z]+\s*$" })
$closeFences = @($lines | Where-Object { $_ -match "^$fence\s*$" })
$checks = [ordered]@{
  Frontmatter = $lab.StartsWith("---`r`nmarp: true") -or $lab.StartsWith("---`nmarp: true")
  TitleOnly = $lab -match "# Créer et tester des Skills avec des agents IA"
  HasPlan = $lab -match "## Lab Plan"
  HasRequiredSections = ($lab -match "## 1\. Introduction") -and ($lab -match "## 2\. Problems Encountered") -and ($lab -match "## 3\. Solutions Implemented")
  HasLanguageFences = ($openFences.Count -gt 0) -and ($openFences.Count -eq $closeFences.Count)
  HasAlignedTables = -not ($lab -match "(?m)^\|[^|]+\|[^|]+\|\s*$")
}
$checks | ConvertTo-Json
if ($checks.Values -contains $false) { exit 1 }
```

Le script vérifie la conformité structurelle ; la relecture humaine vérifie la pertinence pédagogique.

---
<!-- _class: light -->

## Matrice de validation croisée

| Critère | Antigravity | GitHub Copilot | Preuve attendue |
|:---|:---:|:---:|:---|
| Skill lu avant l'action | Préparé | Préparé | Référence explicite au fichier |
| Portée respectée | Bloqué avant lancement | Préparé | Un seul livrable créé |
| Architecture Marp | Validé localement | Préparé | Slides 1 à 5 conformes |
| Code et tableaux | Validé localement | Préparé | Fences nommées et alignements présents |
| Synthèse finale | Bloqué avant lancement | Préparé | Changements, tests et limites |

Une cellule n'est validée que lorsqu'une preuve observable est conservée.

---

## Résultats du lab

- **Livrable :** `lab-agent/prisontation.md`, présentation Marp autonome.
- **Skill appliqué :** `lab-adaptation`, lu avant la rédaction et respecté dans la structure.
- **Test local :** contrôles structurels exécutés avec succès avec PowerShell ; rendu CLI non disponible hors ligne.
- **Test Antigravity :** installation détectée, mais lancement bloqué par l'autorisation Computer Use de la session.
- **Test Copilot :** VS Code et l'entrée de statut Copilot sont détectés ; l'envoi du prompt n'a pas été lancé pour éviter une interaction concurrente non confirmée.
- **Limite :** les preuves d'exécution des deux agents doivent être complétées dans leurs interfaces respectives.

---
<!-- _class: light -->

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Structurer un Skill réutilisable | Validé | Skill minimal et critères observables |
| Créer le lab Marp | Validé | `lab-agent/prisontation.md` avec frontmatter et slides imposées |
| Préparer le test Antigravity | Validé | Prompt commun et consignes dédiées |
| Préparer le test Copilot | Validé | Prompt VS Code et grille identique |

---
<!-- _class: light -->

## Summary & Verification Matrix — continued

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Tester Antigravity | Bloqué par l'environnement | Application détectée, lancement refusé |
| Tester GitHub Copilot | À compléter | Interface détectée, prompt non envoyé |
| Comparer les agents | À compléter | Matrice à compléter après exécution dans les deux outils |

---

## À retenir

Un Skill utile réduit les suppositions de l'agent, cadre la portée et transforme la qualité attendue en preuves vérifiables. Le test est réellement comparable lorsque le contexte, le prompt et les critères restent identiques entre les agents.
