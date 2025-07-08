<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold mb-5 text-center text-gray-800">Editar Producto</h1>
        <form action="{{ route('update_producto', ['id' => $productos->id]) }}" method="POST" class="space-y-5">
            @csrf

            <!-- Nombre -->
            <div>
                <label for="Nombre" class="block text-sm font-medium text-gray-700">Nombre del Producto</label>
                <input 
                    type="text" 
                    id="Nombre" 
                    name="Nombre" 
                    value="{{ $productos->Nombre }}" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>

            <!-- Precio Unitario -->
            <div>
                <label for="precio_unitario" class="block text-sm font-medium text-gray-700">Precio Unitario</label>
                <input 
                    type="number" 
                    id="precio_unitario" 
                    name="precio_unitario" 
                    value="{{ $productos->precio_unitario }}" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>

            <!-- Stock -->
            <div>
                <label for="stock" class="block text-sm font-medium text-gray-700">Stock</label>
                <input 
                    type="number" 
                    id="stock" 
                    name="stock" 
                    value="{{ $productos->stock }}" 
                    required 
                    class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                >
            </div>

            <!-- Botón de envío -->
            <div class="flex justify-center">
                <button 
                    type="submit" 
                    class="bg-indigo-600 text-white px-6 py-2 rounded-md shadow hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                    Actualizar Producto
                </button>
            </div>
        </form>
    </div>
</body>
</html>
