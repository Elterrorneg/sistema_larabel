#### Brezeer
vamos a dar matenimiento a la tabla 
tipo de comprobante
    -id
    -codigo
    -description
# 1 Crear la migracion
``` bash
    php artisan make:migration create_tipo_comprobante_table
```
    database-> migration
# 2 Ejecutar la migracion
``` bash
    php artisan migrate:refresh --seed
```
# 3 Creamos el modelo
``` bash
    php artisan make:model tipoComprobante
```
    app->Models
# 4 Creamos el Controlador
``` bash
    php artisan make:controller TipoComprobanteController --resource --model=TipoComprobante
```
    App\Http\Controllers
# 5 Creamos el Request
``` bash
    php artisan make:request TipoComprobanteRequest
```
# 6 Agregamos la ruta, al routes/web.php
``` bash
    Route::resource('tipo-comprobante', TipoComprobanteController::class);
```
# 7 Agregamos las vitas
Creamos una carpeta tipo-comprobante en la carpeta resources/views y dentro agregamos dos archivos: index.blade.php action.blade.php