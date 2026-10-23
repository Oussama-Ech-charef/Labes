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
    line-height: 1.2;
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
    font-size: 0.74em;
    line-height: 1.14;
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
    font-size: 0.88em;
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

# Erreurs JavaScript

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

L'objectif de ce lab est d'apprendre à identifier, comprendre et résoudre des erreurs JavaScript rencontrées pendant le développement d'un blog.

Le travail porte sur **cinq erreurs**. Pour chacune, nous décrivons le problème, lisons le message, appliquons une correction et vérifions le résultat.

### Outils et notions

- VS Code et Google Chrome pour exécuter le code pas à pas.
- Chrome DevTools, Console et Network pour observer le navigateur.
- Appels API et serveur PHP pour diagnostiquer les erreurs côté serveur.

---
<!-- _class: light -->

## 2. Problems Encountered

| Erreur étudiée | Situation de départ |
|:---|:---|
| `ReferenceError` | Une variable ou une fonction n'existe pas dans la portée courante. |
| `TypeError` | Le code lit une propriété sur `undefined` ou `null`. |
| `SyntaxError` | Le navigateur ne peut pas analyser le fichier JavaScript. |
| `Unexpected token '<'` | L'API renvoie du HTML alors que le client attend du JSON. |
| `HTTP 500` | Le serveur PHP échoue pendant le traitement de la requête. |

Ces messages donnent un point de départ. La cause réelle doit être confirmée dans le code, la Console et la réponse réseau.

---
<!-- _class: light -->

## 3. Solutions Implemented

Pour chaque erreur, appliquer la même démarche :

1. Reproduire le problème avec les mêmes données.
2. Lire le type, le fichier, la ligne et la colonne du message.
3. Vérifier le code autour de la ligne et les valeurs observées.
4. Corriger la cause, puis tester le cas nominal et le cas d'échec.

La correction est validée seulement lorsque l'erreur disparaît et que le comportement attendu est conservé.

---

## Méthode de lecture d'une erreur

```text
app.js:18
ReferenceError: posts is not defined
```

- `app.js` indique le fichier concerné.
- `18` indique la ligne à inspecter en premier.
- `ReferenceError` indique la famille du problème.
- Le texte précise le nom que JavaScript ne trouve pas.

Le message guide la recherche. Il ne remplace pas la vérification du contexte et des valeurs.

---

## Erreur 1 : variable inconnue

```javascript
function renderPosts() {
  return posts.map((post) => `<article>${post.title}</article>`);
}
```

**Problème :** `posts` n'est pas déclaré dans la portée de la fonction.

**Lecture et résolution :** repérer la ligne indiquée, vérifier le nom reçu par la fonction, puis passer explicitement la liste en paramètre.

**Correction et outil :** VS Code signale le symbole inconnu, puis la Console Chrome confirme que le nom n'existe pas.

---

## Erreur 2 : propriété inaccessible

```javascript
const title = post.title.trim();
```

**Message :** `TypeError: Cannot read properties of undefined`.

**Problème :** le code utilise `post` avant la fin du chargement ou après une recherche sans résultat.

**Résolution :** vérifier la valeur avant l'accès, traiter l'absence de résultat et tester une fiche inexistante dans Chrome.

```javascript
const title = post?.title?.trim() ?? "Titre indisponible";
```

---

## Erreur 3 : syntaxe invalide

```javascript
const message = "Article chargé";
console.log(message;
```

**Message :** `SyntaxError: missing ) after argument list`.

**Problème :** la parenthèse fermante manque dans l'appel à `console.log`.

**Résolution et outils :** lire la ligne signalée, utiliser la coloration et le formatage de VS Code, corriger la parenthèse puis recharger la page.

---

## Erreur 4 : réponse HTML à la place du JSON

```javascript
const response = await fetch("/api/posts");
const posts = await response.json();
```

**Message :** `Unexpected token '<'`.

**Problème :** `/api/posts` renvoie souvent une page PHP ou une page 404 qui commence par `<`, pas un objet JSON.

**Lecture et résolution :** dans **Network**, vérifier l'URL, le statut et l'onglet **Response**. Corriger la route, le serveur ou le format retourné avant de parser la réponse.

---

## Erreur 5 : serveur PHP en échec

```text
GET /api/posts 500 (Internal Server Error)
```

**Problème :** le serveur PHP rencontre une exception ou une erreur pendant l'appel API.

**Lecture :** relever le statut et la réponse dans **Network**, puis consulter le terminal et les logs PHP pour trouver la cause côté serveur.

**Résolution :** corriger l'erreur backend, retourner une réponse JSON cohérente et tester à nouveau la requête depuis Chrome.

---

## Réponse API et serveur PHP

Le serveur doit annoncer une réponse JSON lisible par le client :

```php
<?php
header('Content-Type: application/json');

echo json_encode([
    'success' => true,
    'data' => $posts
]);
```

Le navigateur peut alors contrôler le statut, le type de contenu et la structure de `data` avant l'affichage.

---

## Appel API robuste

```javascript
async function loadPosts() {
  const response = await fetch("/api/posts");
  const type = response.headers.get("content-type") ?? "";

  if (!response.ok) throw new Error(`HTTP ${response.status}`);
  if (!type.includes("application/json")) {
    throw new Error("Réponse API non JSON");
  }

  return response.json();
}
```

Le code sépare le statut HTTP, le type de contenu et le parsing du corps de réponse.

---

## Débogage dans VS Code et Chrome

1. Poser un point d'arrêt sur l'appel API ou la ligne signalée.
2. Recharger la page et avancer avec **Step Over**.
3. Examiner les variables dans **Scope** et **Watch**.
4. Comparer les valeurs attendues avec les valeurs réelles.
5. Reproduire ensuite le cas dans la Console Chrome.

Cette méthode permet de suivre l'état du programme avant, pendant et après l'erreur.

---

## Chrome DevTools : Console et Network

| Outil | Question à vérifier | Indice utile |
|:---|:---|:---|
| Console | Quelle ligne et quel type d'erreur ? | Stack trace et fichier source |
| Network | Quelle requête échoue ? | URL, méthode et statut |
| Network / Response | Que renvoie réellement le serveur ? | JSON, HTML ou message PHP |
| Network / Headers | Le format est-il annoncé ? | `Content-Type` |

Toujours comparer la requête envoyée avec la réponse reçue avant de modifier le frontend.

---
<!-- _class: light -->

## Exercice et livrables

Pour chaque erreur du blog, produire :

1. le problème de départ et le message observé ;
2. la lecture du fichier, de la ligne et du contexte ;
3. les étapes de correction et la vérification ;
4. les outils utilisés avec une capture ou une preuve ;
5. le code corrigé ou la réponse API attendue.

Le résultat doit permettre à une autre personne de reproduire le diagnostic.

---

## Exemples de code du lab

Chaque erreur possède un dossier avec un exemple fautif et une correction :

| Erreur | Dossier | Fichiers |
|:---|:---|:---|
| `ReferenceError` | `01-reference-error` | `exemple.js`, `solution.js` |
| `TypeError` | `02-type-error` | `exemple.js`, `solution.js` |
| `SyntaxError` | `03-syntax-error` | `exemple.js`, `solution.js` |
| Réponse JSON invalide | `04-api-json-response` | `exemple.js`, `solution.js` |
| Erreur serveur PHP | `05-php-http-500` | `exemple.php`, `solution.php` |

Les exemples permettent de reproduire l'erreur, d'appliquer la correction et de comparer le comportement obtenu.

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Étudier cinq erreurs JavaScript | Validé | Cinq cas documentés |
| Lire un message d'erreur | Validé | Fichier, ligne et type identifiés |
| Utiliser VS Code et Chrome | Validé | Breakpoints, Console et variables |
| Diagnostiquer un appel API | Validé | Network, statut et Response |
| Comprendre une erreur PHP | Validé | Logs et réponse JSON contrôlés |
| Vérifier la correction | Validé | Cas nominal et cas d'échec testés |

---

## À retenir

Un message JavaScript fournit un indice. Le diagnostic fiable combine le code source, les valeurs observées, la Console, Network et les logs PHP.

À la fin du lab, vous savez localiser l'origine d'une erreur, choisir l'outil adapté et vérifier que la correction fonctionne.
