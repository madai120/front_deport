<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEPORTGO</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/welcome.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</head>

<body>
    <div class="image-container">
        <img src="{{ asset('images/basquet.jpg') }}" alt="Imagen">
    </div>

    <header>
        <nav class="nav-links flex items-center justify-center w-full mx-auto" style="background-color: #011627;">
            <ul class="nav-links flex md:flex-row flex-col md:items-center md:gap-[4vw] gap-8 mt-3 mb-1">
                <li>
                    <a class="hover:text-gray-500 font-bold text-white mb-2 flex items-center justify-center"
                        href="/deportes">DEPORTES</a>
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


    <div class="container mx-auto mt-96">
        <div class="centered-titulo">
            <b>DEPORTGO</b>
        </div>
        <div class="centered-text">
            Descarga nuestra app:
        </div>
        <a href="https://es-es.facebook.com/" class="centered-button rounded-lg overflow-hidden shadow">
    <img src="{{ asset('images/playStore.png') }}" alt="Descargar">
</a>

        <div class="grid grid-cols-12 gap-12">
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center text-2xl">FUTBOL</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/futbol.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center text-2xl">BASQUETBOL</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/basquetbol.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center text-2xl">VOLEIBOL</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/voleibol.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
            <div class="col-span-12 md:col-span-3">
                <p class="text-white mb-2 flex items-center justify-center text-2xl">TENIS</p>
                <div class="bg-gray-200 p-0 h-40 flex items-center justify-center rounded-lg overflow-hidden shadow">
                    <img src="{{ asset('images/tenis.jpg') }}" class="w-full h-full object-cover" alt="Futbol">
                </div>
            </div>
        </div>
    </div>

    <script src="js/welcome.js"></script>
</body>

</html>

<style>
    /* Remove background color from body to allow image to show through */
  body {
      background-color: transparent;
      margin: 0;
      /* Asegurarse de que no hay espacios entre el borde del cuerpo y los elementos */
      padding: 0;
      /* Asegurarse de que no hay espacios entre el borde del cuerpo y los elementos */
  }

  .image-container {
      position: fixed;
      /* Fix the image to the viewport */
      width: 100%;
      /* Cover the entire width */
      height: auto;
      /* Ajustar la altura según el contenido */
      top: 0;
      /* Position at the top */
      left: 0;
      /* Position at the left */
      overflow: hidden;
      /* Hide any overflowing content  */
  }

  .image-container img {
      width: 100%;
      /* Make the image responsive */
      height: auto;
      /* Allow image to adjust height automatically */
      /*max-height: 100%;*/
      /* Set maximum height to container's height */
  }

  .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(255, 255, 255, 0.4);
      /* Color transparente */
      z-index: 1;
      /* Asegúrate de que esté por encima de la imagen */
  }

  header {
      position: relative;
      /* Make header elements positioned relative to the body */
      z-index: 10;
      /* Set header elements above the image */
      /* Rest of your header styles... */
  }

  .container,
  .custom-button {
      /* Add styles for other elements to position them on top of the image */
      position: relative;
      z-index: 10;
      /* Set these elements above the image */
      /* Rest of your styles for container and button... */
  }
  .centered-titulo {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-145%, -140%);
    color: white;
    font-size: 5vw; /* Utiliza vw para que el tamaño del texto sea relativo al ancho del viewport */
    font-family: 'Poppins', sans-serif;
}

.centered-text {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(75%, -350%);
    color: white;
    font-size: 2vw; /* Utiliza vw para que el tamaño del texto sea relativo al ancho del viewport */
    font-family: 'Poppins', sans-serif;
}

.centered-button {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(150%, -150%);
    width: 15vw; /* Ancho del botón relativo al ancho del viewport */
    height: auto; /* Ajustar altura automáticamente */
}

.centered-button img {
    width: 100%; /* Hacer que la imagen ocupe el 100% del ancho del botón */
    height: auto; /* Ajustar altura automáticamente */
}

</style>
