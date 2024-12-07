<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bienvenidos</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="text-center bg-white p-10 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">¡Bienvenidos!</h1>
        <p class="text-lg text-gray-600 mb-6">Explora nuestra plataforma y disfruta de la experiencia.</p>
        <div class="space-x-4">
            <a href="{{route('register')}}" class="px-6 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700">
                Registro
            </a>
            <a href="{{route('login')}}" class="px-6 py-2 bg-green-500 text-white rounded-lg shadow hover:bg-green-600">
                Login
            </a>
        </div>
    </div>
</body>
</html>
