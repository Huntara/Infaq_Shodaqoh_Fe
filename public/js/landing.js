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

// parallax effects
$(window).scroll(function () {
    var wScroll = $(this).scrollTop();

    // about
    if (wScroll > $('.parallax-about').offset().top - 350) {
        $('.parallax-about').each(function (i) {
          setTimeout(function () {
            $('.parallax-about').eq(i).addClass('muncul');
          }, 500 * (i + 1));
        })
    };
})