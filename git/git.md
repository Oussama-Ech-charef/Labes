---
marp: true
theme: default
paginate: true


---

# Git & GitHub

### Version Control et collaboration


Présenté par : Oumaima Mahfoud
SOLICODE

---
# Plan de la présentation

1. **Introduction**

2. **Comprendre Git et GitHub**

3. **Les fondamentaux de Git**
 

4. **GitHub et le travail collaboratif**


5. **Les commits Git**
6. **Conclusion et ressources utiles**
----

# 1. Introduction

Imaginez que vous travaillez sur un projet et qu’après plusieurs modifications, votre code ne fonctionne plus. Vous voulez revenir à une ancienne version, mais vous ne savez pas comment faire.


---

# 2. Qu'est-ce que Git ?

Git est un système de contrôle de versions .

Il permet de :

- Suivre les modifications du code.
- Conserver l'historique du projet.
- Comparer différentes versions.
- Retrouver un état précédent.
- Travailler sur plusieurs branches.

---

# 3. Qu'est-ce que GitHub ?

GitHub est une plateforme en ligne qui héberge des dépôts Git.

Elle permet de :

- Stocker et partager des projets.
- Collaborer avec d'autres développeurs.
- Examiner les modifications.
- Gérer les Pull Requests et les Issues.
- Présenter son portfolio technique.


---

# 5. Les concepts essentiels

- **Repository :** dépôt contenant les fichiers et l'historique du projet.
- **Working Directory :** espace de travail.
- **Staging Area :** zone de préparation des modifications.
- **Commit :** enregistrement d'un ensemble de modifications.
- **Branch :** branche indépendante de développement.
- **Remote :** dépôt distant.
- **Merge :** intégration des changements d'une branche.

---
# 6. Installation et configuration

Vérifier Git :

```bash
git --version
```

Configurer son identité :

```bash
git config --global user.name "Votre Nom"
git config --global user.email "votre@email.com"
```

Vérifier la configuration :

```bash
git config --list
```


---
# 7. Le cycle de vie d'une modification

1. Modifier les fichiers.
2. Préparer les changements avec `git add`.
3. Enregistrer les changements avec `git commit`.
4. Publier les commits avec `git push`.

```bash
git status
git add .
git commit -m "feat: add homepage"
git push
```


---

# 8. Les commandes fondamentales

| Commande | Rôle |
|---|---|
| `git init` | Initialiser un dépôt |
| `git status` | Vérifier son état |
| `git add` | Préparer les modifications |
| `git commit` | Enregistrer les modifications |
| `git log` | Consulter l'historique |
| `git diff` | Comparer les changements |

---

# 9. GitHub et les dépôts distants

- `git clone` : copier un dépôt distant.
- `git remote` : gérer les dépôts distants.
- `git push` : publier les commits.
- `git pull` : récupérer et intégrer les changements distants.

Ces commandes permettent de synchroniser le travail entre l'ordinateur et GitHub.

---

# 10. Les branches

Une branche permet de développer une fonctionnalité sans travailler directement sur la branche principale.

```bash
git switch -c feature/navbar
git add .
git commit -m "feat: add navbar"
git switch main
git merge feature/navbar
```


---


# Conclusion

Git nous aide à suivre l'évolution de notre code.

GitHub nous permet de partager nos projets et de collaborer avec d'autres développeurs.

**La règle essentielle : commencer à versionner son projet dès le début.**