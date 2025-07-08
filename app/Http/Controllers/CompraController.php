<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Categoria;
use App\Models\Proveedor;
use App\Models\Producto;

class CompraController extends Controller
{
    public function index()
    {
        $compras = Compra::with(['categoria', 'proveedor'])->get();
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        $productos = Producto::all();
    
        return view('compras', compact('compras', 'categorias', 'proveedores'));
    }
    
    public function createCompra(Request $request)
    {
        $validate = $request->validate([
            'id_categoria' => 'required|exists:categorias,id',
            'id_proveedor' => 'required|exists:proveedors,id',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);
    
        Compra::create($validate);
    
        return redirect()->route('compras')->with('status', 'Compra registrada con éxito');
    }
    
    public function updateCompra(Request $request, $id)
    {
        $validate = $request->validate([
            'id_categoria' => 'required|exists:categorias,id',
            'id_proveedor' => 'required|exists:proveedors,id',
            'cantidad' => 'required|integer|min:1',
            'total' => 'required|numeric|min:0',
        ]);

        Compra::where('id', $id)->update($validate);
        return redirect()->route('compras')->with('status', 'Compra actualizada con éxito');
    }


    public function updateCompraView($id)
    {
        $compra = Compra::findOrFail($id);
        $categorias = Categoria::all();
        $proveedores = Proveedor::all();
        
  
        return view('editar_compra', compact('compra', 'categorias', 'proveedores'));
  
    }
    public function deleteCompra($id)
    {
        Compra::destroy($id);
        return redirect()->route('compras')->with('status', 'Compra eliminada con éxito');
    }
}