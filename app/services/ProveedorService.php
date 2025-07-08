<?php

namespace App\services;
use App\Models\Proveedor;

class ProveedorService
{
    public function getProveedor()
    {
        return Proveedor::all();
    }
}
?>