<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table = 'proveedor'; // Nombre de la tabla
    use HasFactory;
    protected $fillable = [
        'razon_social',
        'direccion',
        'ruc',
        'persona_contacto',
        'numero_contacto'
    ];
    public function Productos()
    {
        return $this->hasMany(Producto::class, 'Proveedor_idProveedor');
    }
}
