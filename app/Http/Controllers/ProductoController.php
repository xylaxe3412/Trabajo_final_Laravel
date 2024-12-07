<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\services\CategoryService;
use App\services\ProductService;
use App\services\ProveedorService;

class ProductoController extends Controller
{

    public function index(ProductService $product, CategoryService $categoria, ProveedorService $proveedor)
    {
        
        $productos = $product->getProductos();
        $categorias = $categoria->getCategoria();
        $proveedores = $proveedor->getProveedor();

        return view('home', [
            'productos' => $productos,     // Uso correcto de `=>`
            'categorias' => $categorias,   // Uso correcto de `=>`
            'proveedores' => $proveedores // Uso correcto de `=>`
        ]);

    }
    public function createProducto(Request $request, )
    {
        $validate = $request->validate([
            'Nombre' =>'required|string|max:255',
            'precio_unitario' => 'required',
            'stock' => 'required',
            'id_categoria' => 'required',
            'id_proveedors' =>'required'
        ]);
        Producto::create($validate);
        return redirect()->route('home')->with('status', 'Categoria craeda con exito');
    }
    public function updateProducto(Request $request, $id)
    {
        $validate = $request->validate([
            'Nombre' => 'required|string|max:255',
            'precio_unitario' => 'required|numeric',
            'stock' => 'required|integer',
        ]);
    
        Producto::where('id', $id)->update($validate);
    
        return redirect()->route('home')->with('status', 'Producto actualizado con éxito');
    }
    
    public function updateProductoView($id)
    {
       $productos = Producto::find($id);
       return view('editar_producto_view', compact('productos'));
        
    }

    public function deleteProducto($id)
    {
        Producto::destroy($id);
        return redirect()->route('home')->with('status', 'Producto eliminado con exito');
    }

}
