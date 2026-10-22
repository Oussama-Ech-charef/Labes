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

# Codes HTTP et erreurs courantes

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** lire une réponse HTTP et localiser rapidement l'origine d'une erreur.
- **Périmètre :** familles 2xx à 5xx, erreurs JavaScript/PHP et méthode de débogage.
- **Outils :** Console, Network, terminal et logs du serveur.

---
<!-- _class: light -->

## 2. Problems Encountered

- `fetch()` peut recevoir une page HTML alors que le code attend du JSON.
- Un statut `4xx` indique généralement un problème de requête ou d'autorisation ; un `5xx`, un problème serveur.
- Un message comme `ReferenceError`, `TypeError` ou `Unexpected token '<'` ne pointe pas toujours vers la cause initiale.

---

## 3. Solutions Implemented

- Vérifier le statut HTTP avant de traiter le corps de la réponse.
- Examiner **Network → Response** et comparer avec les logs backend.
- Vérifier l'URL, la méthode, le payload et le type de contenu.
- Attraper les erreurs de Promise et afficher un diagnostic utile.

---
<!-- _class: light -->

## Practical Implementation: familles HTTP

| Famille | Signification | Exemples |
|:---|:---|:---|
| **2xx** | Requête réussie | `200`, `201`, `204` |
| **3xx** | Redirection ou cache | `301`, `302`, `304` |
| **4xx** | Requête cliente incorrecte | `400`, `401`, `403`, `404`, `429` |
| **5xx** | Erreur du serveur | `500`, `503`, `504` |

---

## Practical Implementation: fetch robuste

```javascript
async function loadGenres() {
  const response = await fetch("http://localhost:8000/api/genres");
  const contentType = response.headers.get("content-type") ?? "";

  if (!response.ok) {
    throw new Error(`HTTP ${response.status}`);
  }

  if (!contentType.includes("application/json")) {
    throw new Error("La réponse n'est pas du JSON");
  }

  return response.json();
}

loadGenres()
  .then((genres) => console.log(genres))
  .catch((error) => console.error("Diagnostic :", error.message));
```

---
<!-- _class: light -->

## Practical Implementation: méthode de diagnostic

1. **Console :** lire le type et la ligne de l'erreur.
2. **Network :** contrôler l'URL, la méthode, le statut et la réponse.
3. **Backend :** consulter le terminal et les logs.
4. **Reproduction :** refaire le cas avec les mêmes données.
5. **Correction :** tester le succès et le scénario d'échec.

> `Unexpected token '<'` signifie souvent que le client tente de parser du HTML comme du JSON.

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Identifier une famille HTTP | Validé | Tableau 2xx–5xx |
| Vérifier le statut avant parsing | Validé | Test `response.ok` |
| Diagnostiquer une réponse inattendue | Validé | Contrôle du `content-type` |
| Tracer une erreur frontend/backend | Validé | Console, Network et logs |
