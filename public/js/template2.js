function Modaler(title = null, contenu = null, position = null) {
    var myModal = new bootstrap.Modal(
        document.getElementById("exampleModal"),
        {}
    );
    myModal.show();
}

$(".hamb").click(function () {
    $("nav").toggleClass("show");
});

window.addEventListener("scroll", function () {
    if (window.pageYOffset > 40) {
        $("nav").css("top", "75px");
    } else {
        $("nav").css("top", "110px");
    }
});
