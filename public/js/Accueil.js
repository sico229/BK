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

    function calculerMensualite(montantPret, tauxInteret, dureePret) {
        const tauxMensuel = tauxInteret / 12;
        const partie1 =
            (montantPret * tauxMensuel) /
            (1 - 1 / Math.pow(1 + tauxMensuel, dureePret));
        return partie1;
    }
    function Calculateur() {
        var AmmountCurrentValue = $(".AmmountCurrentValue");
        var DureCurrentValue = $(".DureCurrentValue");
        var montantInput = document.querySelector(".Amount");
        var dureInput = document.querySelector(".dure");
        var taux = 2.7;
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
        //M = P * (r(1 + r)^n)/((1 + r)^n - 1)
        // var mensualite = parseFloat(
        //     montantInput.value *
        //         ((taux * Math.pow(1 + taux, dureInput.value)) /
        //             Math.pow(1 - taux, dureInput.value))
        // );
        var p = parseFloat(montantInput.value);
        var r = taux;
        var n = parseFloat();
        var mensualite = parseFloat(dureInput.value);
        var m = calculerMensualite(montantInput.value, 0.027, dureInput.value);
        $(".mensualite").html(m.toFixed(2) + "€/Mois");
        $(".Total").html((m * dureInput.value).toFixed(2) + "€");
    }

    document.querySelector(".Amount").oninput = function () {
        Calculateur();
    };
    document.querySelector(".dure").oninput = function () {
        Calculateur();
    };
});
