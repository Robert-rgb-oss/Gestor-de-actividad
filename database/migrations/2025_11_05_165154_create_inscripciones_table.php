<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('actividad_id')->constrained('actividades')->onDelete('cascade');
            $table->foreignId('alumno_id')->constrained('alumnos')->onDelete('cascade');
            $table->date('fecha_inscripcion')->default(now());
            $table->string('estado')->default('pendiente'); //ej.: pendiente, aceptada, cancelado
            $table->unique(['actividad_id','alumno_id']);
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('inscripciones');
    }
};
