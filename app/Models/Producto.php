<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['Nombre', 'precio_unitario', 'stock', 'id_categoria', 'id_proveedors'];
}
