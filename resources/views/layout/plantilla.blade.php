<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cinemark - Web Page">
    <title>@yield('titulo')</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    
</head>
<body class="bg-gray-100 dark:bg-gray-500">
    <nav class="bg-red-500 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ url('/') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{asset('/img/logoprincipal.png')}}" class="h-8" alt="cinemark logo">
        </a>
        <button type="button"  data-toggle="darkMode" class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 md:hidden lg:hidden sm:block">
            <span class="p-10" id="darkModeIcon">
                <i class="fa-solid fa-sun block dark:hidden" style="color: #FFFFFF;"></i>
            </span>
        </button>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-red-400 px-2.5 py-2.5 dark:text-gray-400 dark:hover:bg-gray-700" aria-controls="navbar-default" aria-expanded="false">
            <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg bg-red-700 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-900">
                <li>
                    <a id="menu-item" href="{{ route('dulceria.index') }}" class="block py-2 px-3 text-white rounded-sm hover:font-bold md:border-0 md:p-0">Dulceria</a>
                </li>
                <li>
                    <a id="menu-item" href="{{ route('formato.index') }}" class="block py-2 px-3 text-white rounded-sm hover:font-bold md:border-0 md:p-0">Formatos y Salas</a>
                </li>
                <li>
                    <a id="menu-item" href="{{ route('otro.index') }}" class="block py-2 px-3 text-white rounded-sm hover:font-bold md:border-0 md:p-0">Otros Servicios</a>
                </li>
                <li>
                    <a id="menu-item" href="{{ route('cine.index') }}" class="block py-2 px-3 text-white rounded-sm hover:font-bold md:border-0 md:p-0">Cines</a>
                </li>
            </ul>
        </div>
        <button type="button"  data-toggle="darkMode" class="focus:outline-none text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 md:block lg:block sm:hidden max-sm:hidden">
            <span class="p-10" id="darkModeIcon">
                <i class="fa-solid fa-sun fa-xl block dark:hidden" style="color: #FFFFFF;"></i>
                <i class="fa-solid fa-moon fa-xl hidden dark:block" style="color: #f9f9fb;"></i>
            </span>
        </button>
        </div>
    </nav>

    @yield('contenido')

    <footer class="bg-red-500 text-white pt-4 pb-3 dark:bg-gray-900">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex flex-col md:flex-row text-center md:text-left gap-6 md:gap-0">
                <!-- Logo -->
                <div class="md:w-1/4 mb-4 md:mb-0">
                    <img src="img/logofooter.png" alt="Cinemark Logo" class="w-24 mx-auto md:mx-0 mb-2">
                    <p class="text-sm"><i class="fa-regular fa-copyright" style="color: #ffffff;"></i> 2025 Cinemark</p>
                </div>

                <!-- Mapa del sitio -->
                <div class="md:w-1/4 mb-4 md:mb-0">
                    <h5 class="text-xl font-semibold mb-2">Mapa del sitio</h5>
                    <ul class="space-y-1">
                        <li><a href="#inicio" class="text-white hover:underline">Inicio</a></li>
                        <li><a href="{{ route('dulceria.index') }}" class="text-white hover:underline">Dulceria</a></li>
                        <li><a href="{{ route('formato.index') }}" class="text-white hover:underline">Formatos y Salas</a></li>
                        <li><a href="{{ route('otro.index') }}" class="text-white hover:underline">Otros Servicios</a></li>
                        <li><a href="{{ route('cine.index') }}" class="text-white hover:underline">Cines</a></li>
                    </ul>
                </div>

                <!-- Otros servicios -->
                <div class="md:w-1/4 mb-4 md:mb-0">
                    <h5 class="text-xl font-semibold mb-2">Otros servicios</h5>
                    <ul class="space-y-1">
                        <li><a href="#" class="text-white hover:underline">Compra online</a></li>
                        <li><a href="#" class="text-white hover:underline">CineClub</a></li>
                        <li><a href="#" class="text-white hover:underline">Facturación</a></li>
                        <li><a href="#" class="text-white hover:underline">Soporte</a></li>
                    </ul>
                </div>

                <!-- Redes sociales -->
                <div class="md:w-1/4 mb-4 md:mb-0">
                    <h5 class="text-xl font-semibold mb-2">Síguenos</h5>
                    <div class="flex justify-center md:justify-start gap-4 text-2xl">
                        <a target="_blank" href="https://web.facebook.com/cinemarkperu?_rdc=1&_rdr#" class="text-white hover:text-slate-300 dark:hover:text-gray-400" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://x.com/cinemark_peru" class="text-white hover:text-slate-300 dark:hover:text-gray-400" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/cinemarkperu" class="text-white hover:text-slate-300 dark:hover:text-gray-400" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://www.youtube.com/@CinemarkPeru" class="text-white hover:text-slate-300 dark:hover:text-gray-400" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--Scripts-->
    <script src="/javascript/app.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>