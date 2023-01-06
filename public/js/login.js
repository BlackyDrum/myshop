function init() {
    document.getElementById('navbar').style.height = "0";
    document.getElementById('navitems').style.visibility = "hidden";
    currentSlide(1);
}
function navbar() {
    if (document.getElementById('nav').innerHTML === "<i class=\"fa-solid fa-xmark scale-150\"></i>") {
        document.getElementById('nav').innerHTML = "<i class=\"fa-solid fa-bars scale-125\"></i>";
        document.getElementById('navbar').style.height = "0";
        document.getElementById('navitems').style.visibility = "hidden";
        return;
    }
    document.getElementById('navbar').style.height = "15rem";
    document.getElementById('nav').innerHTML = "<i class=\"fa-solid fa-xmark scale-150\"></i>";
    document.getElementById('navitems').style.visibility = "visible";
}

function hideCookieDialog() {
    const dialogs = document.getElementsByClassName('js-cookie-consent');

    for (let i = 0; i < dialogs.length; ++i) {
        dialogs[i].style.display = 'none';
    }
}
