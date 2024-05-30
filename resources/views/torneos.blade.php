<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPORTGO</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/eventos.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</head>

<body>
    <header>
        <nav class="nav-links flex items-center justify-center w-full mx-auto bg-[#011627]">
            <ul class="nav-links flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 mt-3 mb-1">
                <li>
                    <a class="hover:text-gray-500 font-bold text-white mb-2 flex items-center justify-center"
                        href="/">INICIO</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 font-bold text-white mb-2 flex items-center justify-center"
                        href="/eventos">EVENTOS</a>
                </li>
                <li>
                    <a class="hover:text-gray-500 font-bold text-white mb-2 flex items-center justify-center"
                        href="/torneos">TORNEOS</a>
                </li>
            </ul>
            <div class="flex items-center gap-6">
                <a href="#" onclick="onToggleMenu()">
                    <ion-icon name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
                </a>
            </div>
        </nav>
    </header>

    <!-- Aquí comienza el código del carrusel -->
    <div class="grid grid-cols-12 gap-12">
        <div class="centered-titulo">
            <b>TORNEOS</b>
        </div>
    </div>

    <!-- Implementa el carrusel aquí -->
    <div class="relative mx-auto w-full max-w-3xl h-64 md:h-80 lg:h-96 overflow-hidden mt-32 mr-20">
        <div class="slide relative w-full h-full hidden">
            <img class="w-full h-full object-cover" src="{{ asset('images/eventos/torneobasquet.jpeg') }}">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white"><b>Torneo de
                    Basquetbol</b></div>
        </div>

        <div class="slide relative w-full h-full hidden">
            <img class="w-full h-full object-cover" src="{{ asset('images/eventos/torneofut.jpg') }}">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white"><b>Torneo de Futbol</b>
            </div>
        </div>

        <div class="slide relative w-full h-full hidden">
            <img class="w-full h-full object-cover" src="{{ asset('images/eventos/torneovoleibol.jpeg') }}">
            <div class="absolute bottom-0 w-full px-5 py-3 bg-black/40 text-center text-white"><b>Torneo de Voleibol</b>
            </div>
        </div>

        <!-- Botón anterior -->
        <a class="absolute left-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(-1)">❮</a>

        <!-- Botón siguiente -->
        <a class="absolute right-0 top-1/2 p-4 -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white hover:text-amber-500 cursor-pointer"
            onclick="moveSlide(1)">❯</a>
    </div>
    <br>

    <!-- Los puntos de navegación -->
    <div class="flex justify-center items-center space-x-5  ml-96">
        <div class="dot w-4 h-4 rounded-full cursor-pointer dot-inactive" onclick="currentSlide(1)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer dot-inactive" onclick="currentSlide(2)"></div>
        <div class="dot w-4 h-4 rounded-full cursor-pointer dot-inactive" onclick="currentSlide(3)"></div>
    </div>
    <!-- Fin del carrusel -->

    <script src="js/welcome.js"></script>
    <script src="js/eventos.js"></script>
</body>

</html>
