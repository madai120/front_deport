// set the default active slide to the first one
let slideIndex = 1;
showSlide(slideIndex);

// change slide with the prev/next button
function moveSlide(moveStep) {
    showSlide(slideIndex += moveStep);
}

// change slide with the dots
function currentSlide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n) {
    let i;
    const slides = document.getElementsByClassName("slide");
    const dots = document.getElementsByClassName('dot');

    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }

    // oculta todos los slides
    for (i = 0; i < slides.length; i++) {
        slides[i].classList.add('hidden');
    }

    // elimina el estado activo de todos los puntos
    for (i = 0; i < dots.length; i++) {
        dots[i].classList.remove('dot-active');
        dots[i].classList.add('dot-inactive');
    }

    // muestra el slide activo
    slides[slideIndex - 1].classList.remove('hidden');

    // resalta el punto activo
    dots[slideIndex - 1].classList.remove('dot-inactive');
    dots[slideIndex - 1].classList.add('dot-active');
}
