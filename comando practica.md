# Comandos en Orden:

## 1. Crear Tablas: Migracion  (database\migrations)
```bash
    php artisan make:migration create_categorias_table
    php artisan migrate
    php artisan migrate:refresh
```
## 2. Creamos un modelo        (app\models)
```bash
    php artisan make:model Categoria
```

## 3. Crear un seeder          (database\seeders)
```bash
    php artisan make:seeder CategoriaSeeder
    php artisan migrate --seed
    php artisan migrate:refresh --seed
```

# 4. Creamos el Controlador      (app\Http\Controllers)
``` bash
    php artisan make:controller CategoriaController --resource --model=Categoria
```

# 5. Creamos el Request           (app\Http\Requests)
``` bash
    php artisan make:request CategoriaRequest
```

# 6. Agregamos la ruta, al routes/web.php
``` bash
    Route::resource('categoria', CategoriaController::class);
```

## funciones de autenticacion de laravel
``` bash
    composer require laravel/breeze --dev
    php artisan breeze:install
    php artisan migrate --seed
    php artisan migrate
    npm install
    npm run dev
```





