# Desarrollo de aplicaciones distribuidas
## Sesion 3

# Si descargamos el codigo de github
'''bash
    composer update
'''
# Si queremos ver todas las rutas 
'''bash
    php artisan route:list
'''

### Controladores
Crear un controlador para gestionar los recursos de la tabla categorias

'''bash
    php artisan make:controller CategoriaController  --resource --model=Categoria
'''
