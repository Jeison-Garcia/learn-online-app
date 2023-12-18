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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('genero', 30);
            $table->string('telefono', 20);
            $table->date('fecha_nacimiento');

            $table->unsignedBigInteger('user_id')->unique();
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('career_id')->nullable();
            $table->foreign('career_id')
            ->references('id')
            ->on('careers')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->unsignedBigInteger('country_id')->nullable();
            $table->foreign('country_id')
            ->references('id')
            ->on('countries')
            ->onDelete('set null')
            ->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
