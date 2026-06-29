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
        Schema::create('farmacia.medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_barras', 20);
            $table->string('nombre_comercial', 150)->notNull();
            $table->string('nombre_generico', 150)->notNull();
            $table->string('concentracion', 50)->notNull();
            $table->unsignedBigInteger('id_forma_farmaceutica')->nullable();
            $table->string('numero_lote', 50)->notNull();
            $table->date('fecha_vencimiento')->notNull();
            $table->string('registro_sanitario', 50)->nullable();
            $table->integer('stock_actual')->notNull()->default(0);
            $table->integer('stock_minimo')->default(10);
            $table->integer('stock_maximo');
            $table->unsignedBigInteger('id_ubicacion_fisica')->nullable();
            $table->decimal('precio_compra', 12, 2)->notNull();
            $table->decimal('precio_venta', 12, 2)->notNull();
            $table->boolean('requiere_receta')->default(false);
            $table->boolean('estado')->default(true);
            $table->timestamps();
            $table->foreign('id_forma_farmaceutica')->references('id')->on('farmacia.forma_farmaceutica')->onDelete('set null');
            $table->foreign('id_ubicacion_fisica')->references('id')->on('farmacia.ubicacion_fisica')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicamentos');
    }
};
