<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = ['Nombre', 'Direccion', 'Telefono', 'Correo', 'Contacto', 'Descripcion'];
    protected $table = 'proveedors';
}

