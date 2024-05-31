<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
            <ul class="nav-links flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 mt-3 mb-1 bg-[#011627]">
                <li>
                    <a class="font-bold text-white mb-2 flex items-center justify-center"
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
    <div class="grid grid-cols-12 gap-12 mt-10">
        <div class="col-span-12 flex justify-center items-center">
            <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-center text-white">EVENTOS</h1>
        </div>
    </div>
    <!-- Contenedor del mapa -->
    <div class="map-container">
        <div id="map-container" class="mt-12 ml-12"></div>

        <!-- Texto dinámico -->
        <div class="animated-text-container mr-5 mt-16">
            <h2>"¡Únete a la emoción! Experimenta la adrenalina en cada gol, cada canasta y cada punto. ¡No te pierdas nuestros eventos deportivos!"
            </h2>
            <p>Dale un giro a tu rutina y sumérgete en el mundo del deporte! Desde fanáticos apasionados hasta atletas de élite, nuestros eventos deportivos son el lugar perfecto para estar.</p>
        </div>
    </div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="js/welcome.js"></script>
    <script src="js/eventos.js"></script>

    <script>
        // Inicializar el mapa
        var map = L.map('map-container').setView([51.505, -0.09], 13); // Coordenadas del centro del mapa y nivel de zoom

        // Agregar capa de mapa
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
    </script>
</body>

</html>
