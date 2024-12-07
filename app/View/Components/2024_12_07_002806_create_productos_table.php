<?php

use App\Models\Categoria;
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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 30)->unique();
            $table->integer('precio_unitario');
            $table->integer('stock');
            $table->date('fecha_creacion')->nullable();
            $table->foreignId('id_categoria')->constrained('categorias')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('id_proveedors')->constrained('proveedors')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
