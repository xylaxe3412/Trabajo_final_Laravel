<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GestionCompras extends Migration
{
    public function up(): void
    {
        Schema::create('compras', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('id_categoria');
    $table->unsignedBigInteger('id_proveedor');
    $table->integer('cantidad');
    $table->decimal('total', 10, 2);
    $table->timestamps();

            
    $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
    $table->foreign('id_proveedor')->references('id')->on('proveedors')->onDelete('cascade');

});


   }

    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
}