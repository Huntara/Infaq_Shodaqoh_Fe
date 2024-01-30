const Hamburger = document.getElementById('hamburger');
const navMenu = document.querySelector('.nav-links');

Hamburger.addEventListener('click', () => {
    if (Hamburger.checked) {
        navMenu.classList.add('active');
    }else {
        navMenu.classList.remove('active');
    }
})