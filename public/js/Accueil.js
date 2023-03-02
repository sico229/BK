const MontantSlider = document.querySelector(".MontantInput");
const DureSlider = document.querySelector(".DureInput");
var taux = 0.28;
$(".TypePret").change((e) => {
    switch (e.target.value) {
        case "conso":
            taux = 0.22;
            break;
        case "immo":
            taux = 0.26;
            break;
        case "perso":
            taux = 0.28;

        default:
            taux = 0.23;
            break;
    }
    Calculateur();
});
MontantSlider.oninput = (e) => {
    Calculateur();
};
DureSlider.oninput = (e) => {
    Calculateur();
};
// MontantSlider.oninput((e) => {
//     console.log(e.target.value);
// });
//Calculateur///////////////////////
function Calculateur() {
    var Montant = document.querySelector(".MontantInput").value;
    var Dure = document.querySelector(".DureInput").value;

    const montantValue = document.querySelector(".montantValue");
    const dureValue = document.querySelector(".dureValue");
    $(".montantValue")
        .html($(".MontantInput").val() + "€")
        .css("left", $(".MontantInput").val() / 2000 + "%");
    $(".MtShow").html($(".MontantInput").val() + "€");

    $(".dureValue")
        .html($(".DureInput").val())
        .css("left", $(".DureInput").val() / 1.2 + "%");
    $(".DrShow").html($(".DureInput").val() + " Mois");

    function calculerMensualite(montant, taeg, duree) {
        var tauxMensuel = Math.pow(1 + taeg, 1 / 12) - 1; // conversion du taeg annuel en taux mensuel
        var mensualite =
            (montant * tauxMensuel) / (1 - Math.pow(1 + tauxMensuel, -duree));
        return mensualite.toFixed(2); // arrondi à 2 décimales
    }

    var mens = calculerMensualite(
        $(".MontantInput").val(),
        taux,
        $(".DureInput").val()
    );
    $(".MsShow").html(mens);
    $(".TxShow").html(taux);

    // dureValue.html(dureValue).css("left", dureValue / 1.2 + "%");

    // document.querySelector(".MontantInput").html(Montant + "€");
    // $(".DureShow").html(dureInput.value);
}

// document.querySelector(".Amount").oninput = function () {
//     Calculateur();
// };
// document.querySelector(".dure").oninput = function () {
//     Calculateur();
// };
