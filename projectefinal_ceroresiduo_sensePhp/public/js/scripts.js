// SCRIPTS per BARRA MENÚ RESPONSIU 

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