<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPORTGO</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <style>
        .image-container {
            width: 100%; /* Cambia el ancho al 100% para que ocupe toda la pantalla */
            margin: 0 auto;
            position: relative;
        }

        .image-container img {
            width: 100%; /* Hacer la imagen responsiva */
            height: auto; /* Permitir que la altura se ajuste automáticamente */
            object-fit: cover;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            overflow: hidden;
        }

        .custom-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #2EC4B6;
            color: white;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            border: none;
            z-index: 10;
        }
    </style>
</head>

<body style="background-color: #011627;">
<header style="background-color: #2EC4B6;">
        <nav class="flex justify-between items-center w-[92%] mx-auto">
            <div>
                <img class="w-16 cursor-pointer" src="https://cdn-icons-png.flaticon.com/512/5968/5968204.png"
                    alt="...">
            </div>
            <div style="background-color: #2EC4B6;"
                class="nav-links duration-500 md:static absolute bg-white md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-500 font-bold" href="#">DEPORTES</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 font-bold" href="#">EVENTOS</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-500 font-bold" href="#">TORNEOS</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <ion-icon onclick="onToggleMenu(this)" name="menu"
                    class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
        </nav>
    </header>

    <div class="image-container">
        <img src="{{ asset('images/deport.webp') }}" alt="Imagen">
        <a href="https://es-es.facebook.com/">
            <button style="background-color: #E71D36;" class="custom-button"><b>Descargar</b></button>
        </a>
    </div>

    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-12 gap-12">
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center">FUTBOL</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/futbol.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center">BASQUETBOL</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/basquetbol.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center">VOLEIBOL</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/voleibol.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center">TENIS</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/tenis.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
        </div>
    </div>

    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>

</html>
