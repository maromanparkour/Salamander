"use strict";

function showMenu() {
    let menu = document.getElementById("menu");
    let con = document.getElementById("container");
    if (menu != null) {
        menu.style.width = "100%";
        menu.style.padding = "1.5vw";
    }
    if (con != null) {
        con.style.display = "grid";
    }
}
function hideMenu() {
    let menu = document.getElementById("menu");
    let con = document.getElementById("container");
    if (menu != null) {
        menu.style.width = "0";
        menu.style.padding = "0";
    }
    if (con != null) {
        con.style.display = "none";
    }
}
function scrlUp() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function showLogo() {
    let logo = document.getElementById("logo");
    if (logo != null) {
        logo.style.display = "block";
    }
}
function hideLogo() {
    let logo = document.getElementById("logo");
    if (logo != null) {
        logo.style.display = "none";
    }
}
function darkMode() {
    var mode = document.getElementById("mode");
    var search = document.getElementById("search");
    var up = document.getElementById("up");
    var lock = document.getElementById("lock");
    document.body.classList.toggle("dark-mode");
    if (mode != null) {
        if (mode.src.match("light")) {
            mode.src = "img/darkmode.png";
        }
        else {
            mode.src = "img/lightmode.png";
        }
    }
    if (search != null) {
        if (search.src.match("light")) {
            search.src = "img/search-dark.png";
        }
        else {
            search.src = "img/search-light.jpg";
        }
    }
    if (up != null) {
        if (up.src.match("light")) {
            up.src = "img/up-dark.png";
        }
        else {
            up.src = "img/up-light.png";
        }
    }
    if (lock != null) {
        if (lock.src.match("light")) {
            lock.src = "img/lock-dark.png";
        }
        else {
            lock.src = "img/lock-light.png";
        }
    }
}
function showSearch() {
    let modal = document.getElementById("search-modal");
    if (modal != null) {
        modal.style.display = "block";
    }
}
function searchIt() {
    let modal = document.getElementById("search-modal");
    if (modal != null) {
        modal.style.display = "none";
    }
}
function showLogin() {
    let logn = document.getElementById("log-form");
    if (logn != null) {
        logn.style.display = "block";
    }
}
function hideLogin() {
    let logn = document.getElementById("log-form");
    if (logn != null) {
        logn.style.display = "none";
    }
}
var input = document.getElementById("input");
if (input != null) {
    input.addEventListener("keypress", function (event) {
        if (event.key === "Enter") {
            event.preventDefault();
            let sbutton = document.getElementById("sbutton");
            if (sbutton != null) {
                sbutton.click();
            }
        }
    });
}
