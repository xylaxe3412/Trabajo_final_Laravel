<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';

    protected $fillable = [
        'id_categoria',
        'id_proveedor',
        'id_producto',
        'cantidad',
        'total'
    ];
    

    protected $casts = [
        'cantidad' => 'integer',
        'total' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    // Relación con Categoria
// App\Models\Compra.php

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }


    // Relación con Proveedor
    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }

    // Scope para filtrar por categoría
    public function scopePorCategoria($query, $productoId)
    {
        return $query->where('id_producto', $productoId);
    }

    // Scope para filtrar por proveedor
    public function scopePorProveedor($query, $proveedorId)
    {
        return $query->where('id_proveedor', $proveedorId);
    }

    // Accessor para formatear el total
    public function getTotalFormateadoAttribute()
    {
        return '$' . number_format($this->total, 2);
    }
}