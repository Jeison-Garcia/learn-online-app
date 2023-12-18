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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 45);
            $table->text('descripcion');
            $table->enum('estado', [0, 1]);
            $table->date('fecha_inicial');
            $table->date('fecha_final');

            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')
            ->references('id')
            ->on('subjects')
            ->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
