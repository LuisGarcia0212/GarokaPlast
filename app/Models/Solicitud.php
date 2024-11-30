<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;

    protected $fillable = [
        'Cantidad',
        'Estado',
        'FechaCreacion',
        'Producto_idProducto'
    ];

    // RelaciÃ³n muchos a uno (un comentario pertenece a un producto)
    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'Producto_idProducto');
    }
}