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
  table { width: 100%; border-collapse: collapse; font-size: 0.9em; }
  th { background-color: #2563eb; color: #ffffff; padding: 6px 8px; }
  td { color: #111827; padding: 5px 8px; border-bottom: 1px solid #bfdbfe; }
  section.light td { color: #111827; border-bottom: 1px solid #bfdbfe; }
  strong, a { color: #1d4ed8; }
---

# Laravel

---
<!-- _class: light -->

## Lab Plan

1. Introduction
2. Problems Encountered
3. Solutions Implemented

---

## 1. Introduction

- **Objectif :** comprendre le rôle de Laravel dans une application Web PHP.
- **Périmètre :** routes, contrôleurs, modèles Eloquent, migrations, Blade et Artisan.
- **Résultat attendu :** relier une URL à des données puis produire une page HTML.

---
<!-- _class: light -->

## 2. Problems Encountered

- Une route qui pointe vers le mauvais contrôleur renvoie une erreur ou une page introuvable.
- Une vue Blade ne peut afficher que les données qui lui sont effectivement transmises.
- Un modèle ou une table absente empêche la lecture des catégories.
- Mettre toute la logique dans la vue rend le code difficile à tester et à maintenir.

---

## 3. Solutions Implemented

- Séparer le parcours **Route → Controller → Model → View**.
- Utiliser Eloquent pour interroger le modèle et transmettre une collection nommée.
- Créer la table avec une migration et vérifier le schéma avant le test.
- Garder la vue responsable de l'affichage uniquement.

---
<!-- _class: light -->

## Practical Implementation: créer le projet

```bash
composer create-project laravel/laravel categories-app
cd categories-app
php artisan serve
```

La commande `php artisan serve` lance le serveur de développement ; l'URL exacte est affichée dans le terminal.

---

## Practical Implementation: route et contrôleur

```php
// routes/web.php
use App\Http\Controllers\CategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/categories', [CategorieController::class, 'index']);
```

```php
// app/Http/Controllers/CategorieController.php
namespace App\Http\Controllers;

use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        return view('categories.index', [
            'categories' => Categorie::all(),
        ]);
    }
}
```

---
<!-- _class: light -->

## Practical Implementation: modèle et vue Blade

```php
// app/Models/Categorie.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['nom'];
}
```

```blade
{{-- resources/views/categories/index.blade.php --}}
<h1>Catégories</h1>
<ul>
    @forelse ($categories as $categorie)
        <li>{{ $categorie->nom }}</li>
    @empty
        <li>Aucune catégorie.</li>
    @endforelse
</ul>
```

---

## Practical Implementation: vérification

```bash
php artisan route:list
php artisan migrate:status
```

Puis ouvrir `/categories` et vérifier :

1. la route est listée ;
2. la table existe ;
3. la page s'affiche sans exception ;
4. les données sont échappées par Blade.

---

## Summary & Verification Matrix

| Objectif | Statut | Preuve de validation |
|:---|:---:|:---|
| Démarrer Laravel | Présenté | `php artisan serve` |
| Relier une route au contrôleur | Présenté | `route:list` |
| Lire les catégories | Présenté | Modèle Eloquent |
| Afficher une page | Présenté | Vue Blade `/categories` |
