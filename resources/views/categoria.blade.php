<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Enlace para Crear Producto -->
    <a href="{{ route('home') }}" class="block mt-6 text-center text-indigo-600 hover:text-indigo-800 font-bold text-xl">
        <section class="bg-indigo-100 p-4 rounded-lg shadow-md hover:bg-indigo-200">
            <h2 class="text-2xl">Crear Producto</h2>
        </section>
    </a>
    
    <!-- Formulario de Crear Categoría -->
    <form action="{{ route('add_categoria') }}" method="post" class="bg-white p-6 rounded-lg shadow-md mt-6 mx-auto max-w-lg">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700">Nombre de la Categoría</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre de la categoría" 
                class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" required>
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700">Descripción</label>
            <textarea name="descripcion" id="descripcion" cols="30" rows="5" placeholder="Descripción de la categoría" 
                class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex justify-center">
            <input type="submit" value="Crear Categoría" 
                class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
    </form>

    <!-- Listado de Categorías -->
    <h2 class="text-2xl text-center text-gray-800 mt-8 font-semibold">Listado de Categorías</h2>
    
    <div class="overflow-x-auto mx-6 mt-6">
        <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nombre</th>
                    <th class="px-6 py-3 text-left">Descripción</th>
                    <th class="px-6 py-3 text-center">Editar</th>
                    <th class="px-6 py-3 text-center">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $categoria->id }}</td>
                        <td class="px-6 py-4">{{ $categoria->Nombre }}</td>
                        <td class="px-6 py-4">{{ $categoria->Descripcion }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('editar_categoria', $categoria->id) }}" 
                                class="text-blue-600 hover:text-blue-800">Editar</a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('eliminar_categoria', $categoria->id) }}" 
                                class="text-red-600 hover:text-red-800">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
