---
marp: true
theme: default
paginate: true
title: Codes HTTP et erreurs courantes
description: Présentation structurée des codes HTTP et des erreurs Frontend / Backend
---

<!-- _class: lead -->
# Codes HTTP et erreurs courantes

### Comprendre les réponses HTTP, repérer les erreurs et savoir où chercher

**Frontend JavaScript · Backend PHP · Débogage**

---

# Sommaire

1. Comprendre les codes HTTP
2. Les codes **2xx** — succès
3. Les codes **3xx** — redirection
4. Les codes **4xx** — erreur côté client
5. Les codes **5xx** — erreur côté serveur
6. Erreurs courantes en JavaScript
7. Erreurs courantes en PHP
8. Méthode de débogage
9. Conclusion

---

# 1. Comprendre les codes HTTP

Un **code HTTP** est un nombre renvoyé par le serveur pour indiquer le résultat d’une requête.

| Famille | Signification générale |
|---|---|
| **2xx** | La requête a réussi |
| **3xx** | Redirection ou ressource inchangée |
| **4xx** | Problème lié à la requête du client |
| **5xx** | Problème côté serveur |

**Exemple :** `GET /api/genres` → `200 OK`

---

# 2. Codes HTTP **2xx**

## Succès — la requête a réussi

| Code | Nom | Signification | Exemple |
|---|---|---|---|
| **200** | OK | La requête a réussi et le serveur a renvoyé les données. | `GET /api/genres` |
| **201** | Created | Une ressource a été créée avec succès. | `POST /api/genres` |
| **204** | No Content | La requête a réussi, sans contenu dans la réponse. | `DELETE /api/genres/1` |

> **À retenir :** 2xx = la requête a réussi.

---

# 3. Codes HTTP **3xx**

## Redirection

| Code | Nom | Signification | Exemple |
|---|---|---|---|
| **301** | Moved Permanently | L’URL a changé de manière permanente. | Ancienne URL → nouvelle URL |
| **302** | Found | Redirection temporaire vers une autre URL. | `/old-page` → `/new-page` |
| **304** | Not Modified | La ressource n’a pas changé ; le navigateur peut utiliser le cache. | Version en cache → `304` |

> **À retenir :** 3xx = redirection ou utilisation d’une version en cache.

---

# 4. Codes HTTP **4xx**

## Erreur côté client

| Code | Nom | Signification |
|---|---|---|
| **400** | Bad Request | La requête contient des données incorrectes. |
| **401** | Unauthorized | Une authentification est nécessaire. |
| **403** | Forbidden | L’accès est interdit : permissions insuffisantes. |
| **404** | Not Found | La page, la route ou le fichier est introuvable. |
| **405** | Method Not Allowed | La méthode HTTP utilisée n’est pas autorisée. |
| **429** | Too Many Requests | Trop de requêtes ont été envoyées en peu de temps. |

> **À retenir :** 4xx = problème lié à la requête envoyée par le client.

---

# 5. Codes HTTP **5xx**

## Erreur côté serveur

| Code | Nom | Signification |
|---|---|---|
| **500** | Internal Server Error | Erreur interne du serveur, souvent liée au code ou à la configuration. |
| **503** | Service Unavailable | Le serveur est temporairement indisponible. |
| **504** | Gateway Timeout | Un serveur intermédiaire n’a pas reçu la réponse attendue à temps. |

> **À retenir :** 5xx = problème côté serveur ; consulter les logs ou le terminal.

---

# 6. Erreurs courantes — Frontend JavaScript

| Message d’erreur | Signification |
|---|---|
| `SyntaxError` | Erreur de syntaxe dans le code JavaScript. |
| `ReferenceError` | Une variable ou une fonction n’est pas définie. |
| `TypeError` | Une opération n’est pas compatible avec le type de donnée. |
| `Unexpected token '<'` | Le code attend du JSON, mais reçoit du HTML, par exemple une page d’erreur PHP. |
| `Failed to fetch` | La requête n’a pas abouti : serveur arrêté, URL incorrecte ou problème réseau. |
| `Uncaught (in promise)` | Une erreur dans une Promise n’a pas été interceptée. |

**Où chercher ?** Outils développeur → **Console**, puis **Network → requête → Response**.

---

# 7. Erreurs courantes — Backend PHP

| Message d’erreur | Signification |
|---|---|
| `Parse error` | Erreur de syntaxe dans le code PHP. |
| `Undefined variable` | Une variable n’est pas définie. |
| `Call to undefined function` | La fonction n’existe pas ou n’a pas été chargée. |
| `TypeError` | Une valeur ne correspond pas au type attendu. |
| `Fatal error` | Erreur grave pouvant interrompre l’exécution du script. |

**Où chercher ?** Consulter le terminal où le serveur PHP est lancé et les logs PHP.

---

# 8. Méthode de débogage

1. **Console :** lire le message d’erreur JavaScript.
2. **Network :** vérifier le code HTTP, la requête, le `Payload` et la `Response`.
3. **Terminal / logs PHP :** rechercher l’erreur produite par le serveur.
4. **Vérifier :** l’URL, la méthode (`GET` / `POST`), les données envoyées et le format de réponse (`JSON` ou `HTML`).

---

# Exemple : pourquoi `fetch()` reçoit du HTML ?

Le frontend attend du JSON, mais le backend PHP renvoie une page d’erreur HTML.

```js
const response = await fetch("http://localhost:8000/api/genres");
const data = await response.json();
```

Si la réponse commence par du HTML, la conversion en JSON peut provoquer :

`SyntaxError: Unexpected token '<'`

**À vérifier :** `Network → requête → Response`, puis le terminal PHP.

---

# 9. Conclusion

- Les codes **2xx** indiquent généralement une réussite.
- Les codes **3xx** indiquent une redirection ou l’utilisation du cache.
- Les codes **4xx** signalent un problème lié à la requête du client.
- Les codes **5xx** signalent un problème côté serveur.
- Pour trouver la cause, examiner la **Console**, le **Network** et les **logs PHP**.

> **Important :** utiliser `fetch()` ne garantit pas que la requête a réussi. Il faut vérifier le statut HTTP et la réponse.
