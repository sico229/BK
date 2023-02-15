import { Modaler } from "./template2";
Modaler();
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
function Calculateur() {
    var AmmountCurrentValue = $(".AmmountCurrentValue");
    var DureCurrentValue = $(".DureCurrentValue");
    var montantInput = document.querySelector(".Amount");
    var dureInput = document.querySelector(".dure");
    AmmountCurrentValue.html(montantInput.value).css(
        "left",
        montantInput.value / 500 + "%"
    );
    DureCurrentValue.html(dureInput.value).css(
        "left",
        dureInput.value / 1.2 + "%"
    );

    $(".MontantShow").html(montantInput.value + "€");
    $(".DureShow").html(dureInput.value);
}

document.querySelector(".Amount").oninput = function () {
    Calculateur();
};
document.querySelector(".dure").oninput = function () {
    Calculateur();
};
