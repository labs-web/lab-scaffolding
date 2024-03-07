---
layout: default
chapitre: update template 
order: 3
---

# Guide de Update Template

Ce guide détaille étape par étape la configuration de votre projet Laravel en utilisant InfyOm Laravel Generator pour la génération de code, les modèles d'interface utilisateur AdminLTE pour une interface réactive, et Doctrine DBAL pour les interactions avec la base de données.

## Prérequis:

* PHP 8.0 ou une version supérieure ([https://www.php.net/downloads.php](https://www.php.net/downloads.php))
* Composer ([https://laravel.com/docs/4.2/releases](https://laravel.com/docs/4.2/releases))
* Node.js et npm ([https://nodejs.org/en/download](https://nodejs.org/en/download))

## Installation:

1. ## Création d'un Nouveau Projet Laravel:
   ```bash
   composer create-project laravel/laravel mon-projet
   ```

2. ## Installation des Dépendances:
   ```bash
   cd mon-projet
   composer require infyomlabs/laravel-generator infyomlabs/adminlte-templates doctrine/dbal:^3.6 infyomlabs/laravel-ui-adminlte
   ```

3. ## Publication des Configurations:
   - ## Pour InfyOm Generator:
     ```bash
     php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
     ```
   - ## Pour les Messages Localisés:
     ```bash
     php artisan infyom:publish --localized
     ```

4. ## Installation et Compilation des Ressources de l'Interface Utilisateur AdminLTE:
   ```bash
   composer require infyomlabs/laravel-ui-adminlte
   php artisan ui adminlte --auth
   npm install
   npm run dev
   ```

5. ## Création des Migrations:
   ```bash
   php artisan make:migration create_projets_table
   php artisan make:migration create_taches_table
   ```

   - Remplacez `projets` et `taches` par les noms réels de vos tables.

6. ## Génération des Modèles et des Contrôleurs:
   ```bash
   php artisan infyom:scaffold Projet --fromTable --table=projects --prefix=GestionProjets
   php artisan infyom:scaffold Tache --fromTable --table=taches --prefix=GestionProjets
   ```

   - Remplacez `Projet` et `Tache` par les versions en CamelCase singulières de vos noms de table.
   - L'indicateur `--fromTable` indique l'utilisation de vos tables de base de données existantes.
   - Le `--prefix=GestionProjets` ajoute le préfixe "GestionProjets" aux noms de contrôleurs et aux routes.

7. ## Annulation du Scaffold Projet à l'aide de la commande infyom.

   ```bash
   php artisan infyom:rollback Projet scaffold --fromTable --table=projets
   ```
8. ## Modifier les templates de génération de code
   - Pour modifier les templates de génération de code, vous pouvez publier les fichiers de modèles pour les personnaliser si nécessaire:
   ```bash
   php artisan vendor:publish --tag=laravel-generator-templates
   php artisan vendor:publish --tag=adminlte-templates
   php artisan vendor:publish --tag=adminlte-views
   ```
Vous pouvez également modifier les templates de génération de code dans le dossier `vendor/infyomlabs/laravel-generator/templates` et `vendor/infyomlabs/adminlte-templates/templates`.

## Remarques Supplémentaires:

- N'oubliez pas de migrer votre base de données après avoir créé les migrations:
   ```bash
   php artisan migrate
   ```
- Personnalisez le code généré et l'interface utilisateur selon les besoins spécifiques de votre projet.

- Référez-vous à la documentation officielle d'InfyOm Laravel Generator et d'AdminLTE pour des options de configuration et d'utilisation détaillées :
    - InfyOm Laravel Generator: [https://infyom.com/](https://infyom.com/)