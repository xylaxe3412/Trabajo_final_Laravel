<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = ['Nombre', 'Direccion', 'Telefono', 'Correo'];
    protected $table = 'proveedors';
}

