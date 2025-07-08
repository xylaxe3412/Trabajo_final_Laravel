<?php

namespace App\services;
use App\Models\Producto;

class ProductService
{
    public function getProductos()
    {
        return Producto::all();
    }
}
?>