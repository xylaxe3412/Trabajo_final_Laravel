<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;

class ProveedorController extends Controller
{
    
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('proveedor', compact('proveedores'));
        
    }

    public function createProveedor(Request $request)
    {
        $validated = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Direccion' => 'required|string|max:255',
            'Telefono' => 'required|string|max:15',
            'Correo' => 'required|email|max:255',
            'Contacto' => 'required|string|max:255',
            'Descripcion' => 'required|string|max:1000',
        ]);

        Proveedor::create($validated);

        return redirect()->route('proveedor')->with('status', 'Proveedor creado con éxito');
    }
    public function updateProveedor(Request $request, $id)
    {
        $validate = $request->validate([
            'Nombre' => 'required|string|max:255',
            'Direccion' => 'required',
            'Telefono' => 'required',
            'Correo' => 'required|email',
            'Contacto' => 'required',
            'Descripcion' => 'required',
        ]);
    
        Proveedor::where('id', $id)->update($validate);
        
        return redirect()->route('proveedor')->with('status', 'Proveedor actualizado con éxito');
    }
    
    public function updateProveedorView($id)
    {
       $proveedor = Proveedor::find($id);
       return view('editar_proveedor_view', compact('proveedor'));
        
    }

    public function deleteProveedor($id)
    {
        Proveedor::destroy($id);
        return redirect()->route('proveedor')->with('status', 'Proveedor eliminado con exito');
    }
}
