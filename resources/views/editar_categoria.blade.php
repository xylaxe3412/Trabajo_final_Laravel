<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Categoría</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Formulario para Editar Categoría -->
    <form action="{{ route('editar_categoria', ['id' => $categorias->id]) }}" method="post" class="bg-white p-8 rounded-lg shadow-md max-w-xl mx-auto mt-6">
        @csrf
        
        <!-- ID (solo lectura) -->
        <div class="mb-4">
            <label for="id" class="block text-gray-700 font-semibold">ID de la Categoría</label>
            <input type="text" name="id" value="{{ $categorias->id }}" placeholder="{{ $categorias->id }}" disabled class="w-full mt-2 p-3 border border-gray-300 rounded-lg bg-gray-100">
        </div>

        <!-- Nombre de la Categoría -->
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold">Nuevo Nombre</label>
            <input type="text" name="nombre" placeholder="{{ $categorias->nombre }}" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Descripción de la Categoría -->
        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700 font-semibold">Nueva Descripción</label>
            <textarea name="descripcion" cols="30" rows="5" placeholder="{{ $categorias->descripcion }}" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <!-- Botón de Enviar -->
        <div class="flex justify-center">
            <input type="submit" value="Editar Categoría" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
    </form>

</body>
</html>
