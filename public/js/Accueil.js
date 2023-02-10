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

    //Calculateur///////////////////////

    var AmmountCurrentValue = $(".AmmountCurrentValue");
    var montantInput = document.querySelector(".Amount");
    montantInput.oninput = function () {
        AmmountCurrentValue.html(this.value).css(
            "left",
            this.value / 500 + "%"
        );
        console.log();
    };
});
