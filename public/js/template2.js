export function Modaler(title = null, contenu = null, position = null) {
    var myModal = new bootstrap.Modal(
        document.getElementById("exampleModal"),
        {}
    );
    myModal.show();
}
$(".hamb").click(function () {
    $("nav").toggleClass("show");
});
