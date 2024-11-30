<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'TotalBruto',
        'FechaEmision',
        'Cliente_idCliente'
    ];

    // RelaciÃ³n muchos a uno (un comentario pertenece a un producto)
    public function Cliente()
    {
        return $this->belongsTo(Cliente::class, 'Cliente_idCliente');
    }
}