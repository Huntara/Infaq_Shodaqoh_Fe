const Hamburger = document.getElementById('hamburger');
const navMenu = document.querySelector('.nav-menu');

Hamburger.addEventListener('click', () => {
    if (Hamburger.checked) {
        navMenu.classList.add('active');
    }else {
        navMenu.classList.remove('active');
    }
});

document.addEventListener('click', function(e) {
    if (!Hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('active');
    }
})

var typing = new Typed ('.typing', {
    strings : [
        "di Infak Wikrama",
        "Semoga amal baikmu diterima oleh Allah",
        "Ya Ahlil Jannah",
    ], 
    typeSpeed: 300,
    backSpeed: 50,
    loop: true,
})