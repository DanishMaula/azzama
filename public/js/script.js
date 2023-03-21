
// Navbar 
const menuToggle = document.querySelector('.menu-toggle');
const navMenu = document.querySelector('.navbar-menu');

menuToggle.addEventListener('click', function () {
    navMenu.classList.toggle('slide');
});

// change color onscroll
var navbar = document.querySelector(".navbar");
var originalColor = navbar.style.backgroundColor;
window.addEventListener("scroll", function () {
    var scrolled = window.scrollY;
    if (scrolled > 100) {
        navbar.style.backgroundColor = "#FEFDF3";
    } else {
        navbar.style.backgroundColor = originalColor;
    }
});

// hide navbar on scroll
var presScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollpos = window.pageYOffset;
    if (presScrollpos > currentScrollpos) {
        document.querySelector(".navbar").style.top = "0";
    } else {
        document.querySelector(".navbar").style.top = "-100px";
    }
    presScrollpos = currentScrollpos;

};
