const nav = document.querySelector('nav');

window.addEventListener('scroll', function () {
    const offset = window.pageYOffset;

    if (offset > 1) {
        nav.classList.add('shadow');
        nav.classList.add('nav-gradient');
    }
    else {
        nav.classList.remove('shadow');
        nav.classList.remove('nav-gradient');
    }
});

const btnToTop = document.getElementById('top');

btnToTop.addEventListener('click', function () {
    window.scrollY = 0;
});