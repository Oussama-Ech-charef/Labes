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

# L'architecture MVC

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** séparer les responsabilités d'une application Web.
- **Model :** données et règles métier.
- **View :** interface présentée à l'utilisateur.
- **Controller :** coordination de la requête et choix de la réponse.

---
<!-- _class: light -->

## 2. Problems Encountered

- Mélanger SQL, logique métier et HTML dans un même fichier complique la maintenance.
- Un contrôleur trop chargé devient difficile à tester.
- Une vue ne doit pas connaître les détails d'accès à la base de données.
- Un mauvais passage de données produit une page vide ou une erreur de variable.

---

## 3. Solutions Implemented

- Faire passer la requête par la chaîne **Route → Controller → Model → View**.
- Garder le contrôleur comme coordinateur et déplacer l'accès aux données dans le modèle.
- Transmettre à la vue un contrat de données explicite.
- Tester les responsabilités séparément.

---
<!-- _class: light -->

## Practical Implementation: responsabilités

| Partie | Responsabilité | Exemple Laravel |
|:---|:---|:---|
| **Model** | Données et relations | `Categorie` avec Eloquent |
| **View** | Présentation HTML | `categories/index.blade.php` |
| **Controller** | Coordination | `CategorieController@index` |

```text
Navigateur → Route → Controller → Model / Base de données
                                      ↓
                                View → HTML
```

---

## Practical Implementation: route et contrôleur

```php
// routes/web.php
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategorieController::class, 'index']);
```

```php
// CategorieController.php
public function index()
{
    $categories = Categorie::all();

    return view('categories.index', compact('categories'));
}
```

---
<!-- _class: light -->

## Practical Implementation: la vue

```blade
{{-- resources/views/categories/index.blade.php --}}
<h1>Catégories</h1>

@foreach ($categories as $categorie)
    <p>{{ $categorie->nom }}</p>
@endforeach
```

La vue reçoit les données ; elle ne décide pas comment les rechercher.

---

## Practical Implementation: anti-patterns

| À éviter | Pourquoi | Alternative |
|:---|:---|:---|
| SQL dans la View | Couplage fort | Modèle ou service |
| HTML dans le Model | Responsabilités mélangées | Vue Blade |
| Contrôleur géant | Tests et évolution difficiles | Méthodes ciblées |
| Variables implicites | Erreurs de rendu | Contrat explicite |

---
<!-- _class: light -->

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Définir MVC | Validé | Rôles Model/View/Controller |
| Suivre le parcours d'une requête | Validé | Schéma de flux |
| Séparer le code | Validé | Exemples Laravel distincts |
| Éviter les anti-patterns | Validé | Matrice de vérification |
