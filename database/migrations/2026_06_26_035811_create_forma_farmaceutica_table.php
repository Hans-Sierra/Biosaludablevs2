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
        Schema::create('farmacia.forma_farmaceutica', function (Blueprint $table) {
            $table->id()->notNull();
            $table->string('nombre', 100)->notNull();
            $table->string('descripcion', 100)->notNull();
            $table->boolean('estado')->notNull()->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('farmacia.forma_farmaceutica');
    }
};
