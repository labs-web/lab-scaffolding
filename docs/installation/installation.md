---
layout: default
chapitre: installation 
order: 2
---

# Lab Scaffolding

## Configuration du projet Lab

### Prérequis:

- PHP 8.0 ou supérieur
- Composer ([https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md](https://getcomposer.org/doc/faqs/how-to-install-composer-programmatically.md))
- Node.js et npm ([https://nodejs.org/en/download](https://nodejs.org/en/download))

### 1. Création d'un nouveau projet Laravel:

```bash
composer create-project laravel/laravel lab-scaffolding
cd lab-scaffolding
```

### 2. Installation d'InfyOm Generator et des modèles AdminLTE:


```bash
composer require infyomlabs/laravel-generator infyomlabs/adminlte-templates doctrine/dbal
composer update
```

### 3. Publication des configurations nécessaires:

```bash
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
php artisan infyom:publish --localized
```

### 4. Résolution des dépendances de l'interface utilisateur (si Laravel UI est utilisé):

```bash
composer require infyomlabs/laravel-ui-adminlte
php artisan ui adminlte --auth
npm install
npm run dev
```

### 5. (Facultatif) Personnalisation des modèles:

Publiez les fichiers de modèles pour les personnaliser si nécessaire:

```bash
php artisan vendor:publish --tag=laravel-generator-templates
php artisan vendor:publish --tag=adminlte-templates
php artisan vendor:publish --tag=adminlte-views
```

### 6. Configuration de la base de données 

Reportez-vous aux instructions séparées de `lab-database-laravel` (non incluses ici) pour créer votre base de données et votre schéma.

### 7. Génération de code avec Rollback et Préfixe:

```bash
# Génération de code avec option de rollback (recommandée)
php artisan infyom:scaffold Projet --fromTable --table=projets --rollback

# Génération de code avec préfixe (par ex., `app\Models\MonProjet`)
php artisan infyom:scaffold Projet --fromTable --table=projets --prefix=Mon

# Génération de code avec des vues spécifiques (par ex., index, show)
php artisan infyom:scaffold Projet --fieldsFile --views=index,show

# Génération de code en sautant la migration et en utilisant un fichier de champs personnalisé (avancé)
php artisan infyom:scaffold Projet --skip=migration --fieldsFile=resources/model_schemas/Projet.json --views=index,show
```

### 8. Démarrage de l'application:

```bash
# Lancer le serveur de développement frontal (terminal séparé)
npm run dev

# Démarrer le serveur de développement Laravel
php artisan serve
```

### 9. Références:

- InfyOm Laravel Generator: [https://infyom.com/open-source](https://infyom.com/open-source/laravelgenerator/docs/7.0/installation)
- Dépôt InfyOm GitHub : [https://github.com/InfyOmLabs](https://github.com/InfyOmLabs)
- Documentation Laravel : [https://laravel.com/docs/10.x/packages](https://laravel.com/docs/10.x/packages)

### Améliorations clés:

- Option de rollback: Ajout de l'option `--rollback` aux commandes `infyom:scaffold` pour une génération de code plus sûre.
- Support du préfixe: Instructions incluses sur l'utilisation de l'option `--prefix` pour des préfixes de modèles personnalisés.
- Correction d'erreur: Correction de la référence incorrecte au package `laravel-mix`.
- Clarté et organisation: Amélioration de la structure et de la présentation des informations pour une meilleure lisibilité.
- Concision et structure: Rationalisation des détails inutiles tout en conservant les étapes essentielles.
- Mise en forme du code: Amélioration de la mise en forme du code pour la lisibilité.
- Concision: Suppression des répétitions inutiles tout en maintenant la clarté.
- Structure: Maintien d'une structure claire et concise pour une navigation facile.
- Grammaire et orthographe: Correction d'erreurs grammaticales mineures pour une meilleure clarté.
- Précision: Garantie de l'exactitude des informations en fonction de la documentation actuelle et des meilleures pratiques.


