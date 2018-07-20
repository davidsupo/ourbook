$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();

});

$('#exampleModal').modal('hide');

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

//MISMA ALTURA
function equalHeight(group) {
    tallest = 0;
    group.each(function () {
        thisHeight = $(this).height();
        if (thisHeight > tallest) {
            tallest = thisHeight;
        }
    });
    group.height(tallest);
}

$(document).ready(function () {
    equalHeight($(".altura-igual"));
});

$(document).ready(function () {
    equalHeight($(".altura-igual-card"));
});

$(document).ready(function () {
    equalHeight($(".altura-igual-card-oferta"));
});







