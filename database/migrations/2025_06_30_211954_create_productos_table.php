<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up(): void
    {
        Schema::create('productos', function (Blueprint $table) {
    $table->id();
    $table->string('Nombre');
    $table->string('descripcion', 100)->nullable();
    $table->decimal('precio_unitario', 10, 2);
    $table->integer('stock');
    $table->unsignedBigInteger('id_categoria');
    $table->timestamps();
            
    $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');

});

    }

    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
}
