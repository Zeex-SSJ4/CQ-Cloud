# CQ-Cloud

## Commandes : 
`composer install`

> start a development server at https://localhost:8000 

`php artisan serve`

> see list of all commands

`php artisan list`

`php artisan make:controller <controllerName> --resource --model:<modelName>`

`php artisan make:model <modelName>`

> get routing list

`php artisan route:list`

`php artisan make:model User`

```
bloc code
```

## Configuration BDD :

`php artisan migrate:install`

`php artisan migrate:refresh`

`php artisan migrate`

> Création d'une nouvelle table dans la BDD

`php artisan make:migration create_users_table --create=users`
