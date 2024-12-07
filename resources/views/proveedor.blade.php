<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gestionar Proveedores</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Enlace para Crear Producto -->
    <a href="{{ route('home') }}" class="text-center bg-indigo-500 hover:bg-indigo-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition duration-200 mt-6 inline-block mx-auto">
        <h2 class="text-xl">Crear Producto</h2>
    </a>

    <!-- Formulario Crear Proveedor -->
    <form action="{{ route('add_proveedor') }}" method="POST" class="bg-white p-8 rounded-lg shadow-md max-w-xl mx-auto mt-6">
        @csrf
        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 font-semibold">Nombre del Proveedor</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre del Proveedor" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="direccion" class="block text-gray-700 font-semibold">Dirección</label>
            <input type="text" name="Direccion" id="Direccion" placeholder="Dirección" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="telefono" class="block text-gray-700 font-semibold">Teléfono</label>
            <input type="tel" name="Telefono" id="Telefono" placeholder="Teléfono" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="correo" class="block text-gray-700 font-semibold">Correo</label>
            <input type="email" name="Correo" id="Correo" placeholder="Correo" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="contacto" class="block text-gray-700 font-semibold">Contacto</label>
            <input type="tel" name="Contacto" id="Contacto" placeholder="Contacto" required class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>

        <div class="mb-4">
            <label for="descripcion" class="block text-gray-700 font-semibold">Descripción</label>
            <textarea name="Descripcion" id="Descripcion" cols="30" rows="5" placeholder="Descripción del proveedor" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"></textarea>
        </div>

        <div class="flex justify-center">
            <input type="submit" value="Crear Proveedor" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-indigo-500">
        </div>
    </form>

    <!-- Mensaje de estado -->
    @if (@session('status'))
        <div class="text-center mt-4 text-green-600">
            <h2>{{ session('status') }}</h2>
        </div>
    @endif

    <!-- Lista de Proveedores -->
    <h2 class="text-center text-2xl font-semibold mt-8">Lista de Proveedores</h2>
    <div class="overflow-x-auto mt-4 mx-6">
        <table class="min-w-full bg-white rounded-lg shadow-md">
            <thead>
                <tr class="bg-indigo-600 text-white">
                    <th class="px-6 py-3 text-left">ID</th>
                    <th class="px-6 py-3 text-left">Nombre</th>
                    <th class="px-6 py-3 text-left">Dirección</th>
                    <th class="px-6 py-3 text-left">Teléfono</th>
                    <th class="px-6 py-3 text-left">Correo</th>
                    <th class="px-6 py-3 text-left">Contacto</th>
                    <th class="px-6 py-3 text-left">Descripción</th>
                    <th class="px-6 py-3 text-center" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proveedores as $proveedor)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="px-6 py-4">{{ $proveedor->id }}</td>
                        <td class="px-6 py-4">{{ $proveedor->Nombre }}</td>
                        <td class="px-6 py-4">{{ $proveedor->Direccion }}</td>
                        <td class="px-6 py-4">{{ $proveedor->Telefono }}</td>
                        <td class="px-6 py-4">{{ $proveedor->Correo }}</td>
                        <td class="px-6 py-4">{{ $proveedor->Contacto }}</td>
                        <td class="px-6 py-4">{{ $proveedor->Descripcion }}</td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('editar_proveedor_view', $proveedor->id) }}" class="text-blue-600 hover:text-blue-800">Editar</a>
                        </td>
                        <td class="px-6 py-4 text-center">
                            <a href="{{ route('eliminar_proveedor', $proveedor->id) }}" class="text-red-600 hover:text-red-800">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>
