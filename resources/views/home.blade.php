<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Enlaces Crear Proveedor y Crear Categoría -->
    <article class="flex justify-around mt-6 mb-6">
        <a href="{{ route('proveedor') }}" class="text-center bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-200">
            <h2 class="text-xl">Crear Proveedor</h2>
        </a>

        <a href="{{ route('categoria') }}" class="text-center bg-green-500 hover:bg-green-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-200">
            <h2 class="text-xl">Crear Categoría</h2>
        </a>
    </article>
    
    <!-- Formulario de Crear Producto -->
    <form action="{{ route('add_product') }}" method="post" class="bg-white p-8 rounded-lg shadow-md max-w-xl mx-auto mt-6">
        @csrf
        <div class="mb-4">
            <label for="Nombre" class="block text-gray-700 font-semibold">Nombre del Producto</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Ingresa el nombre del producto" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="precio_unitario" class="block text-gray-700 font-semibold">Precio</label>
            <input type="number" name="precio_unitario" id="precio_unitario" placeholder="Ingresa el precio del producto" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="stock" class="block text-gray-700 font-semibold">Stock</label>
            <input type="number" name="stock" id="stock" placeholder="Ingresa la cantidad en stock" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="id_categoria" class="block text-gray-700 font-semibold">Seleccionar Categoría</label>
            <select name="id_categoria" id="id_categoria" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="" disabled selected>Seleccionar Categoría</option>
                @foreach ($categorias as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="id_proveedors" class="block text-gray-700 font-semibold">Seleccionar Proveedor</label>
            <select name="id_proveedors" id="id_proveedors" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <option value="" disabled selected>Seleccionar Proveedor</option>
                @foreach ($proveedores as $proveedor)
                    <option value="{{ $proveedor->id }}">{{ $proveedor->id }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-center">
            <input type="submit" value="Añadir Producto" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
    </form>

    <!-- Tabla de Productos -->
    <div class="overflow-x-auto mt-8 mx-6">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nombre del Producto</th>
                    <th class="px-6 py-3 text-left">Precio</th>
                    <th class="px-6 py-3 text-left">Stock</th>
                    <th class="px-6 py-3 text-left">Fecha de Creación</th>
                    <th class="px-6 py-3 text-center" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $producto->id }}</td>
                        <td class="px-6 py-4">{{ $producto->Nombre }}</td>
                        <td class="px-6 py-4">{{ $producto->precio_unitario }}</td>
                        <td class="px-6 py-4">{{ $producto->stock }}</td>
                        <td class="px-6 py-4">{{ $producto->created_at->format('Y-m-d H:i:s') }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('editar_producto_view', $producto->id) }}" class="text-blue-600 hover:text-blue-800">Editar</a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('eliminar_producto', $producto->id) }}" class="text-red-600 hover:text-red-800">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
