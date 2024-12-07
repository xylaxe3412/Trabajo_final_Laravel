<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [ProductoController::class, 'index'])->name('home');
Route::get('/proveedor', [ProveedorController::class, 'index'])->name('proveedor');
Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria');

Route::post('/home/add', [ProductoController::class, 'createProducto'])->name('add_product');
Route::get('/producto/editar/{id}', [ProductoController::class, 'updateProductoView'])->name('editar_producto_view');
Route::post('/producto/actualizar/{id}', [ProductoController::class, 'updateProducto'])->name('update_producto');
Route::get('/home/delte{id}', [ProductoController::class, 'deleteProducto'])->name('eliminar_producto');



Route::post('/proveedor/add', [ProveedorController::class, 'createProveedor'])->name('add_proveedor');
Route::get('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedorView'])->name('editar_proveedor_view');
Route::post('/proveedor/edit/{id}', [ProveedorController::class, 'updateProveedor'])->name('editar_proveedor');
Route::get('/proveedor/delte{id}', [ProveedorController::class, 'deleteProveedor'])->name('eliminar_proveedor');

Route::post('/categoria/add', [CategoriaController::class, 'createCategory'])->name('add_categoria');
Route::get('/categoria/edit/{id}', [CategoriaController::class, 'updateCategoryView'])->name('editar_categoria');
Route::post('/categoria/edit/{id}', [CategoriaController::class, 'updateCategory'])->name('editar_categoria');
Route::get('/categoria/delte{id}', [CategoriaController::class, 'deleteCategory'])->name('eliminar_categoria');



Route::get('/register', function () {
    return view('regsiter');
})->middleware(['auth', 'verified'])->name('regsiter');

Route::middleware('auth')->group(function () {
    
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});




require __DIR__.'/auth.php';
