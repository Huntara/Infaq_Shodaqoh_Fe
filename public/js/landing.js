const Hamburger = document.getElementById('hamburger');
const navMenu = document.querySelector('.nav-menu');

Hamburger.addEventListener('click', () => {
    if (Hamburger.checked) {
        navMenu.classList.add('active');
    }else {
        navMenu.classList.remove('active');
    }
    console.log('ok')
});

document.addEventListener('click', function(e) {
    if (!Hamburger.contains(e.target) && !navMenu.contains(e.target)) {
        navMenu.classList.remove('active');
    }
    console.log('ok')
})