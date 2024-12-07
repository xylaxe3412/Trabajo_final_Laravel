<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Proveedor</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Formulario para Editar Proveedor -->
    <form action="{{ route('editar_proveedor', ['id' => $proveedor->id]) }}" method="post" class="bg-white p-8 rounded-lg shadow-md max-w-xl mx-auto mt-6">
        @csrf

        <!-- ID (campo oculto) -->
        <div class="mb-4">
            <input type="hidden" name="id" value="{{ $proveedor->id }}">
        </div>

        <!-- Nombre del Proveedor -->
        <div class="mb-4">
            <label for="Nombre" class="block text-gray-700 font-semibold">Nombre del Proveedor</label>
            <input type="text" name="Nombre" value="{{ $proveedor->Nombre }}" placeholder="Nombre del proveedor" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Dirección del Proveedor -->
        <div class="mb-4">
            <label for="Direccion" class="block text-gray-700 font-semibold">Dirección</label>
            <input type="text" name="Direccion" value="{{ $proveedor->Direccion }}" placeholder="Dirección" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Teléfono del Proveedor -->
        <div class="mb-4">
            <label for="Telefono" class="block text-gray-700 font-semibold">Teléfono</label>
            <input type="tel" name="Telefono" value="{{ $proveedor->Telefono }}" placeholder="Teléfono" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Correo del Proveedor -->
        <div class="mb-4">
            <label for="Correo" class="block text-gray-700 font-semibold">Correo Electrónico</label>
            <input type="email" name="Correo" value="{{ $proveedor->Correo }}" placeholder="Correo electrónico" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Contacto del Proveedor -->
        <div class="mb-4">
            <label for="Contacto" class="block text-gray-700 font-semibold">Nombre del Contacto</label>
            <input type="tel" name="Contacto" value="{{ $proveedor->Contacto }}" placeholder="Nombre del contacto" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <!-- Descripción del Proveedor -->
        <div class="mb-4">
            <label for="Descripcion" class="block text-gray-700 font-semibold">Descripción</label>
            <textarea name="Descripcion" cols="30" rows="10" placeholder="Descripción del proveedor" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">{{ $proveedor->Descripcion }}</textarea>
        </div>

        <!-- Botón de Enviar -->
        <div class="flex justify-center">
            <input type="submit" value="Actualizar Proveedor" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
    </form>

</body>
</html>
