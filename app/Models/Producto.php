<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ['Nombre', 'descripcion', 'precio_unitario', 'stock', 'id_categoria'];
}
