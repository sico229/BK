$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        center: true,
        items: 7,
        autoplay: true,
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            600: {
                items: 4,
            },
        },
    });
});
