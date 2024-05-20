<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoComprobante extends Model
{
    use HasFactory;
    protected $table = "tipo_comprobantes";

    protected $fillable = [
        'codigo',
        'descripcion',
        'activo',
    ];
}
