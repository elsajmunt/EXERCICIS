// BARRA MENÚs RESPONSIUs -------------------------------------

document.addEventListener('DOMContentLoaded', () => {     // MENÚ PRINCIPAL 
    const toggleButton = document.querySelector('.toggle-button');
    const navbarLinks = document.querySelector('.navbar-links');   

    toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active');
    });
});

document.addEventListener('DOMContentLoaded', () => {  // MENÚ CATEGORIES 
    const toggleButtonCateg = document.querySelector('.toggle-buttoncategories');  
    const navbarLinksCateg = document.querySelector('.navbarcategories-links');

    toggleButtonCateg.addEventListener('click', () => {
        navbarLinksCateg.classList.toggle('active');
    });
}); 


// SLIDE SHOW: ---------------------------------------

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
} 

// FORMULARIS: No funcionen a l'script.js--------------------------------------- 
