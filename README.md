# Lab - Scaffolding

Installing into existing Laravel Projects

## Références
- Documentation 
  - 



## Installation de infyom

- infyom.com est compatible avec laravel version 9

```bash
composer create-project --prefer-dist laravel/laravel:^9.0 project-manager
```

Add following packages into composer.json while using it with Laravel 9.

```json
 "require": {
     "infyomlabs/laravel-generator": "^5.0",
     "infyomlabs/adminlte-templates": "^5.0",
     "doctrine/dbal": "~2.3"
 }  
 ```
Composer Update

 ```bash
composer update
```

Publish Vendor

```bash
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
```

Publish

```bash
php artisan infyom:publish --localized
```

fixe error at RouteServiceProvider file 


```bash
composer require infyomlabs/laravel-ui-adminlte
```

```bash
php artisan ui adminlte --auth
```

```bash
npm install
npm install laravel-mix --save-dev # fixe error
npm run dev
# npm install && npm install laravel-mix --save-dev && npm run dev
```

## Création de la base de données 
 - voir lab-database-laravel

## GUI 

```
"require": {
   "infyomlabs/generator-builder": "^1.0"
} 
```
Add Service Provider
InfyOm\GeneratorBuilder\GeneratorBuilderServiceProvider::class, 

```
php artisan vendor:publish
```




## Génération de code

```bash
php artisan infyom:scaffold Project --fromTable --table=projects
php artisan infyom:scaffold Task --fromTable --table=tasks
php artisan infyom:scaffold Member --fromTable --table=members
php artisan infyom:scaffold Post --fromTable --table=posts
```
 

## Références 
- https://infyom.com/open-source/laravelgenerator/docs/8.0/installation
- https://github.com/InfyOmLabs/laravel-generator