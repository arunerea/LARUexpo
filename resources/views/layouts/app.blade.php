<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LARU.</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        <div class="flex justify-between items-center px-6 py-4">
            <div class="flex space-x-4 items-center">
                <h1 class="titulo">LARU.</h1>
                <a href="#" class="flex items-center text-blue-600 hover:underline">
                    <i class="fa-solid fa-location-dot ml-10 mr-3 text-xl"></i> Ubicación
                </a>
            </div>
            <div class="flex space-x-4 items-center">
                <a href="/login" class="bg-blue-500 text-white px-5 py-2 rounded hover:bg-blue-200 transition">
                    Login
                </a>
                <a href="/register" class="bg-blue-800 text-white px-5 py-2 rounded hover:bg-blue-200 transition">
                    Register
                </a>
            </div>
        </div>
        <hr>
        @yield('content')
        @vite('resources/js/app.js')
    </body>
</html>