$('label').click(function () {
    $('label').removeClass('active');
    $(this).addClass('active');
});

function ativaMenu(){
    var element = document.getElementById("header");
  element.classList.toggle("on");
};


var $simpleCarousel = document.querySelector(".js-carousel--simple");

new Glider($simpleCarousel, {
    slidesToShow: 2,
    slidesToScroll: 2,
    draggable: true,
    dots: ".js-carousel--simple-dots",
});

const debounce = function (func, wait, immediate) {
    let timeout;
    return function (...args) {
        const context = this;
        const later = function () {
            timeout = null;
            if (!immediate) func.apply(context, args);
        };
        const callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) func.apply(context, args);
    };
};

const target = document.querySelectorAll('[data-anime]');
const animationClass = 'animate';

function animeScroll() {
    const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4.5);
    target.forEach(function (element) {
        if ((windowTop) > element.offsetTop) {
            element.classList.add(animationClass);
        } else {
            element.classList.remove(animationClass);
        }
    })
}

animeScroll();

if (target.length) {
    window.addEventListener('scroll', debounce(function () {
        animeScroll();
    }));
}