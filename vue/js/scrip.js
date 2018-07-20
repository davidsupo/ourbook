$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    
    
    
});

$('#myList a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
});

$(document).ready(function () {
    var swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5500,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});




