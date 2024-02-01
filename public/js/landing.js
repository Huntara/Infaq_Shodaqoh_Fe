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

// animation nav
window.addEventListener('scroll', function() {
    var nav = document.querySelector('nav');
    if (this.window.scrollY > 200) {
        nav.style.backgroundColor = '#fff';
        nav.style.border = '1px solid rgba(0, 0, 0, .15)';
        nav.style.borderRadius = '10px';
        nav.style.transition = 'all .3s ease';
    }else {
        nav.style.backgroundColor = 'transparent';
        nav.style.border = 'none';
    }
})

// parallax effects
$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    // about
    if (wScroll > $('.parallax-about').offset().top - 400) {
        $('.parallax-about').each(function (i) {
          setTimeout(function () {
            $('.parallax-about').eq(i).addClass('muncul');
          }, 500 * (i + 1));
        })
    };
    if (wScroll > $('.parallax-about-dua').offset().top - 400) {
        $('.parallax-about-dua').each(function (i) {
          setTimeout(function () {
            $('.parallax-about-dua').eq(i).addClass('muncul');
          }, 500 * (i + 1));
        })
    };
})