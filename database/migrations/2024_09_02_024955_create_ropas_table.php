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
        Schema::create('ropas', function (Blueprint $table) {
            $table->id();
            $table->string('codigobarra')->unique();
            $table->string('nombre');
            $table->string('Marca');
            $table->enum('talla', ['XS', 'S', 'M', 'L', 'XL']);
            $table->enum('color', ['Rojo', 'Azul', 'Verde', 'Amarillo', 'Blanco', 'Rosado', 'Multicolor', 'Otro']);
            $table->integer('precio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ropas');
    }
};
