#### Instalar paquetes de  lenguajes

# 1 Publicar el directorio lang
'''bash
    php artisan lang:publish
'''
# 2 Instalamos el paquete larabvl lang
'''bash
    composer require laravel-lang/common --dev
'''
# 3 agregamos el idioma español
'''bash
    php artisan lang:add es
'''
# 5 Actualizamos el paquete de idiomas
'''bash
    php artisan lang:update
'''


##  vamosa ahora a trabajar en ele login
# 1 crear un seeder 
'''bash
    php artisan make:seeder UserSeeder

## ejecutar seeder
'''bash
    php artisan migrate --seed
    php artisan migrate:refresh --seed
'''
