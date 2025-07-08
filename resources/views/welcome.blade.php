<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiendaVirtual</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="text-center p-8 bg-white rounded-lg shadow-md">
        <h1 class="text-4xl font-bold text-indigo-600 mb-4">Bienvenido a TiendaVirtual</h1>
        <p class="text-gray-600 mb-6">Tu tienda online favorita. Compra fácil, rápido y seguro.</p>
        
        <div class="flex justify-center gap-4">
            <a href="{{route('register')}}" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 transition">Crear Cuenta</a>
            <a href="{{route('login')}}" class="px-4 py-2 border border-indigo-600 text-indigo-600 rounded hover:bg-indigo-50 transition">Iniciar Sesión</a>
        </div>
    </div>
</body>
</html>
