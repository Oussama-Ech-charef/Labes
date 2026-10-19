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
  section.center { text-align: center; }
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

# Laravel

## Développer des applications Web avec PHP

**Rôle · Architecture · Avantages · Utilisation**

---

## 1. Laravel, c'est quoi ?

- **Framework Web PHP**.
- Fournit des outils prêts à l'emploi : routes, sécurité, base de données et tests.
- Encourage un code **structuré, réutilisable et maintenable**.
- Sert aussi à construire des **API** pour des applications JavaScript ou mobiles.

> Laravel est un framework : il s'appuie sur PHP, il ne le remplace pas.

---

## 2. Son architecture : MVC

<div style="display:flex;gap:14px;align-items:stretch;text-align:center;margin-top:25px">
  <div style="flex:1;border:2px solid #b2ccff;border-radius:12px;padding:18px;background:#eff4ff">
    <h3>Model</h3>
    <p style="font-size:19px">Données<br>et règles métier</p>
  </div>
  <div style="flex:1;border:2px solid #b2ccff;border-radius:12px;padding:18px;background:#eff4ff">
    <h3>View</h3>
    <p style="font-size:19px">Interface<br>avec Blade</p>
  </div>
  <div style="flex:1;border:2px solid #b2ccff;border-radius:12px;padding:18px;background:#eff4ff">
    <h3>Controller</h3>
    <p style="font-size:19px">Traite la requête<br>et coordonne</p>
  </div>
</div>

<p style="text-align:center;font-size:21px;margin-top:25px"><strong>Requête → Route → Contrôleur → Modèle / Base de données → Vue ou JSON</strong></p>

---

## 3. Les outils essentiels

| Élément | Fonction |
|---|---|
| **Routes** | Associent une URL à une action |
| **Controllers** | Traitent les requêtes HTTP |
| **Eloquent ORM** | Manipule les données avec des modèles PHP |
| **Migrations** | Créent et modifient les tables |
| **Blade** | Produit les pages HTML dynamiques |
| **Artisan** | Exécute les commandes du projet |

---

## 4. Exemple : afficher les catégories

**Objectif :** afficher les catégories stockées dans la base de données.

```php
// routes/web.php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

Route::get('/categories', [CategorieController::class, 'index']);
```

```php
// CategorieController.php
use App\Models\Categorie;

public function index()
{
    return view('categories.index', [
        'categories' => Categorie::all()
    ]);
}
```

<small>La route reçoit la requête, le contrôleur appelle le modèle, puis la vue affiche les données.</small>

---

## 5. La vue Blade

```blade
<!-- resources/views/categories/index.blade.php -->
<h1>Catégories</h1>

<ul>
    @foreach ($categories as $categorie)
        <li>{{ $categorie->nom }}</li>
    @endforeach
</ul>
```

**Blade** sépare la présentation HTML de la logique qui récupère les données.

---

## 6. Pourquoi utiliser Laravel ?

- **Productivité :** moins de code répétitif et commandes utiles.
- **Sécurité :** protections et outils intégrés à configurer correctement.
- **Organisation :** architecture claire et conventions communes.
- **Écosystème :** authentification, files d'attente, cache, tests et extensions.

---

## 7. Où utilise-t-on Laravel ?

- Applications **CRUD** de gestion.
- Sites Web dynamiques et espaces administrateurs.
- E-commerce et plateformes de réservation.
- APIs REST pour une application mobile ou JavaScript.
- Applications full-stack avec Blade, Livewire ou Inertia.

---

## 8. À retenir

```text
PHP + Laravel
      ↓
Routes → Contrôleurs → Modèles → Base de données
      ↓
Vue Blade ou réponse JSON
```

Laravel fournit une structure prête à évoluer, mais il faut toujours comprendre **PHP, HTTP, les données et la sécurité**.

---

## Sources

- [Documentation Laravel 13.x](https://laravel.com/docs/13.x)
- [Request Lifecycle](https://laravel.com/docs/13.x/lifecycle)
- [Frontend et Blade](https://laravel.com/docs/13.x/frontend)
- [Eloquent ORM](https://laravel.com/docs/13.x/eloquent)
- [Marp](https://marp.app/)

