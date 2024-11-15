<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $fillable = [
        'razon_social',
        'direccion',
        'ruc',
        'persona_contacto',
        'numero_contacto'
    ];
}
