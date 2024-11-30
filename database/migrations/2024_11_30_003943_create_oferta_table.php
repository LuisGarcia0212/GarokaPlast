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
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Estado');
            $table->date('Fecha');
            $table->float('ImporteUni');
            $table->float('ImporteTotal');
            $table->foreignId('Solicitud_idSolicitud') // Relación con la tabla 'posts'
                  ->constrained() // Añade la restricción de clave foránea
                  ->onDelete('cascade'); // Eliminar comentarios si se elimina el post
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oferta');
    }
};
