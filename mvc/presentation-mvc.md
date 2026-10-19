---
marp: true
theme: default
size: 16:9
paginate: true
html: true
style: |
  section {
    font-family: Arial, Helvetica, sans-serif;
    background: #ffffff;
    color: #172033;
    padding: 48px 58px;
    font-size: 25px;
  }
  h1, h2, h3 { color: #155eef; }
  h1 { font-size: 2.1em; letter-spacing: -0.03em; }
  h2 { font-size: 1.45em; margin-bottom: 0.65em; }
  strong { color: #155eef; }
  a { color: #155eef; }
  ul { line-height: 1.45; }
  li { margin: 0.22em 0; }
  section.lead {
    background: #101828;
    color: #f8fafc;
    text-align: left;
    justify-content: center;
  }
  section.lead h1 { color: #ffffff; font-size: 3em; }
  section.lead h2 { color: #84adff; font-size: 1.2em; font-weight: normal; }
  section.lead strong { color: #84adff; }
  section.lead a { color: #84adff; }
  section.small { font-size: 19px; }
  section footer { color: #667085; font-size: 13px; }
  section.lead footer { color: #98a2b3; }
  table { font-size: 20px; width: 100%; }
  th { background: #eff4ff; color: #1849a9; }
  td, th { padding: 8px 10px; }
  code { color: #175cd3; }
  pre { font-size: 17px; border-radius: 10px; background: #f8fafc; }
  blockquote { border-left: 5px solid #155eef; background: #eff4ff; padding: 12px 20px; color: #344054; }
---

<!-- _class: lead -->

# L'architecture MVC

## Model · View · Controller

**Organiser une application Web Laravel**

---

## Plan

1. Comprendre le principe MVC
2. Identifier le rôle du Model, de la View et du Controller
3. Suivre un exemple Laravel de bout en bout
4. Comprendre l'intérêt de séparer les responsabilités
5. Retenir les idées essentielles

---

## 1. MVC en une phrase

MVC sépare une application en trois responsabilités :

- **Model** : données et règles métier ;
- **View** : interface visible par l'utilisateur ;
- **Controller** : reçoit la requête et coordonne le traitement.

> Le but : ne pas mélanger SQL, logique métier et HTML dans un seul fichier.

---

## 2. Le rôle de chaque partie

| Partie | Rôle dans Laravel | Exemple |
|---|---|---|
| **Model** | Accéder aux données et à leurs relations | `Categorie` avec Eloquent |
| **View** | Présenter les données | `categories/index.blade.php` |
| **Controller** | Coordonner la requête | `CategorieController@index` |

```text
Requête HTTP → Controller → Model / Base de données
                              ↓
                         View → Réponse HTML
```

---

## 3. Exemple : afficher les catégories

La route associe l'URL `/categories` au Controller :

```php
// routes/web.php
use App\Http\Controllers\CategorieController;

Route::get('/categories', [CategorieController::class, 'index']);
```

Le Controller demande les données au Model :

```php
public function index()
{
    $categories = Categorie::all();

    return view('categories.index', compact('categories'));
}
```

---

## 4. La View Blade

La View reçoit les données et produit le HTML :

```blade
<!-- resources/views/categories/index.blade.php -->
<h1>Catégories</h1>

@foreach ($categories as $categorie)
    <p>{{ $categorie->nom }}</p>
@endforeach
```

Le résultat du parcours est :

```text
Navigateur → Route → Controller → Model → View → HTML
```

---

## 5. Pourquoi séparer les responsabilités ?

- **Maintenance :** chaque fichier a un rôle clair.
- **Réutilisation :** un Model peut servir à plusieurs Controllers.
- **Tests :** les parties peuvent être testées séparément.
- **Évolution :** une View Blade peut être remplacée par une réponse JSON.

### À éviter

- SQL dans la View ;
- HTML dans le Model ;
- Controller qui contient toute la logique de l'application.

---

## 6. À retenir

```text
Model      = données et règles métier
View       = interface utilisateur
Controller = coordination de la requête
```

Dans Laravel, MVC aide à construire une application plus lisible, testable et facile à faire évoluer.

---

## Sources

- [Laravel — Controllers](https://laravel.com/docs/13.x/controllers)
- [Laravel — Request Lifecycle](https://laravel.com/docs/13.x/lifecycle)
- [Laravel — Frontend et Blade](https://laravel.com/docs/13.x/frontend)
- [Laravel — Eloquent ORM](https://laravel.com/docs/13.x/eloquent)
- [Marp](https://marp.app/)

