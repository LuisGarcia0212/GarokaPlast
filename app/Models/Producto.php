<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'NombreProducto',
        'Cantidad',
        'Categoria',
        'Precio',
        'Descripcion',
        'Proveedor_idProveedor'
    ];

    // RelaciÃ³n muchos a uno (un comentario pertenece a un producto)
    public function Proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'Proveedor_idProveedor');
    }
}