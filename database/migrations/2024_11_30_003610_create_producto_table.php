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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('NombreProducto');
            $table->float('Cantidad');
            $table->string('Categoria');
            $table->float('Precio');
            $table->string('Descripcion');
            $table->foreignId('Proveedor_idProveedor') // Relación con la tabla 'posts'
                  ->constrained() // Añade la restricción de clave foránea
                  ->onDelete('cascade'); // Eliminar comentarios si se elimina el post
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto');
    }
};
