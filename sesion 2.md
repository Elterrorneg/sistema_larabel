# Desarrollo de aplicaciones distribuidas
## Sesion 2


### Crear Migraciones
crear una migracion para la tabla categoria
Database first:
code first

'''bash
    php artisan make:migration create_categorias_table
'''

## Ejecutando las migraciones
'''bash
    php artisan migrate
'''

## Refrescar la tabla
'''bash
    php artisan migrate:refresh
'''

## Crear un modelo
'''bash
    php artisan make:model Categoria
'''

## Crear un seeder
'''bash
    php artisan make:seeder CategoriaSeeder
'''

## ejecutar seeder
'''bash
    php artisan migrate --seed
    php artisan migrate:refresh --seed