<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('vehiculo')->nullable();
            $table->string('duracion')->nullable();
            $table->unsignedInteger('precio')->nullable();
            $table->string('nombre');
            $table->string('email');
            $table->string('telefono');
            $table->string('tipo_doc');
            $table->string('num_doc');
            $table->date('fecha');
            $table->string('hora');
            $table->string('tipo');
            $table->string('recogida');
            $table->string('entrega');
            $table->string('metodo');
            $table->string('direccion')->nullable();
            $table->json('accesorios')->nullable();
            $table->text('observaciones')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};