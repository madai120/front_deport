const navLinks = document.querySelector('.nav-links ul');
const menuIcon = document.querySelector('.menu-icon');

function onToggleMenu() {
    navLinks.classList.toggle('hidden');
}

// Función para manejar el evento de redimensionamiento
function handleResize() {
    if (window.innerWidth >= 768) {
        navLinks.classList.remove('hidden');
    } else {
        navLinks.classList.add('hidden');
    }
}

window.addEventListener('resize', handleResize);

window.addEventListener('load', handleResize);