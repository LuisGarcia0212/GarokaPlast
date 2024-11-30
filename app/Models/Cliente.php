<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'RazonSocial',
        'RUC',
        'Direccion',
        'DNI',
        'Nombre'
    ];

    public function Factura()
    {
        return $this->hasMany(Factura::class, 'Cliente_idCliente');
    }
}