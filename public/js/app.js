// Navbar scroll
document.addEventListener("scroll", function() {
    var navbarBefore = document.querySelector(".navbar-before");
    var navbar = document.querySelector(".navbar");
    var logo = document.querySelector(".logo");
    var title = document.querySelector(".title-home");
    var titleHidden = document.querySelector(".title-home-hidden");
    var btnNav = document.querySelectorAll(".btn-navigation");
    if (window.scrollY > 30) {
        navbarBefore.classList.add("scrolled");
        navbar.classList.add("scrolled");
        logo.classList.add("scrolled");
        title.classList.add("scrolled");
        titleHidden.classList.add("scrolled");
        btnNav.forEach(element => {
            element.classList.add("scrolled");
        });
    } else {
        navbarBefore.classList.remove("scrolled");
        navbar.classList.remove("scrolled");
        logo.classList.remove("scrolled");
        title.classList.remove("scrolled");
        titleHidden.classList.remove("scrolled");
        btnNav.forEach(element => {
            element.classList.remove("scrolled");
        });
    }
});
