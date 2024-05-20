<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Producto;
use Illuminate\Support\Str;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 100; $i++){
            Producto::create([
                'nombre' => 'Producto' . Str::random(5),
                'descripcion' => 'Descripcion' . Str::random(5),
                'codigo_barras' => 'code_' . Str::random(3),
                'precio_compra' => 10.5,
                'precio_venta' => 15.5,
                'stock' => 50,
                'activo' => rand(0, 1) == 1 ? true : false,
            ]);
        }
    }
}
