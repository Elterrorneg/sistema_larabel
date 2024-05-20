<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nombre',150);
            $table->string('descripcion',255);
            $table->string('codigo_barras',64);
            $table->decimal('precio_compra',8,2);
            $table->decimal('precio_venta',8,2);
            $table->smallInteger('stock');
            $table->boolean('activo', 70)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
