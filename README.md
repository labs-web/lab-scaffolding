# Lab - Scaffolding

## Travail à faire 

- Installation de infyom
- Personnalisation des templates vers notre prototype

## Création du projet laravel vide 

````bash
composer create-project laravel/laravel lab-scaffolding
````

## Installation de infyom

Add following packages into composer.json while using it with Laravel 9.


```json
 "require": {
     "infyomlabs/laravel-generator": "^6.0",
     "infyomlabs/adminlte-templates": "^6.0",
     "doctrine/dbal": "^3.6"
 }
 ```

 ```bash
composer update
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
php artisan infyom:publish --localized
```

fixe error at RouteServiceProvider file 


```bash
composer require infyomlabs/laravel-ui-adminlte
php artisan ui adminlte --auth
npm install
# npm install laravel-mix --save-dev # fixe error
npm run dev
```

## Création de la base de données 
 - voir lab-database-laravel

## Génération de code

```bash
php artisan infyom:scaffold Project --fromTable --table=projects
php artisan infyom:scaffold Task --fromTable --table=tasks
php artisan infyom:scaffold Member --fromTable --table=members
php artisan infyom:scaffold Post --fromTable --table=posts
```
 

## Références 
- https://infyom.com/open-source/laravelgenerator/docs/10.0/installation
- https://github.com/InfyOmLabs/laravel-generator
- https://laravel.com/docs/10.x/packages