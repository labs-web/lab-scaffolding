
````conf
php artisan infyom:scaffold Project --fromTable --table=projects
php artisan infyom:scaffold Task --fromTable --table=tasks
php artisan infyom:scaffold Member --fromTable --table=members

php artisan infyom:scaffold Project --fieldsFile --views=index,show

````