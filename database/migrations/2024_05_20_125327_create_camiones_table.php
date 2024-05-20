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
        Schema::create('camiones', function (Blueprint $table) {
            $table->id();
            $table->string('potencia');
            $table->string('matricula');
            $table->string('modelo');
            $table->string('tipo');
            $table->unsignedBigInteger('camionero_id');
            $table->foreign('camionero_id')->references('id')->on('camioneros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camiones');
    }
};
