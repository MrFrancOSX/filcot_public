//Cambio de color en scroll
window.onscroll = function () {
    var nav = document.getElementById('nav');
    var logoTransparent = document.getElementById('logoTransparent');
    var logoOriginal = document.getElementById('logoOriginal');
    if (window.pageYOffset < 25) {
        nav.classList.add('transparentNav');
        logoTransparent.style.display = 'block';
        logoOriginal.style.display = 'none';
    } else {
        nav.classList.remove('transparentNav');
        logoTransparent.style.display = 'none';
        logoOriginal.style.display = 'block';
    }
};

//Menu Scroll just working on space

$("a[href^='#']").click(function (e) {
    e.preventDefault();

    var position = $($(this).attr('href')).offset().top - 135;

    $('body, html').animate(
        {
            scrollTop: position,
        } /* speed */
    );
});
