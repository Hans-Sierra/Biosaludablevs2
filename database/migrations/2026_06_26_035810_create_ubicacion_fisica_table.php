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
        Schema::create('farmacia.ubicacion_fisica', function (Blueprint $table) {
            $table->id()->notNull();
            $table->string('codigo', 100)->notNull();
            $table->string('descripcion', 100)->notNull();
            $table->string('ambiente', 100)->notNull();
            $table->boolean('estado')->notNull()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmacia.ubicacion_fisica');
    }
};
