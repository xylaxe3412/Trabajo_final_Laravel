<?php

namespace App\services;
use App\Models\Categoria;

class CategoryService
{
    public function getCategoria()
    {
        return Categoria::all();
    }
}
?>