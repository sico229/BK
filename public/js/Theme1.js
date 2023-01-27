window.addEventListener("scroll", () => {
    let Y = window.scrollY;
    var ligne1 = document.querySelector(".Ligne1");
    Y > 150 ? ligne1.classList.add("haut") : ligne1.classList.remove("haut");
});
