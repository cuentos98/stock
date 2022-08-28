function cierraNav() {
    document.querySelector("#sideNav").style.width = "0";
    document.querySelector("#sideNav").style.opacity = "0";

    document.querySelector("#botonAbreNav").style.opacity = "1";

}
function abreNav() {
    document.querySelector("#sideNav").style.width = "30vw";
    document.querySelector("#sideNav").style.opacity = "1";

    document.querySelector("#botonAbreNav").style.opacity = "0";

}