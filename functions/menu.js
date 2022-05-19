"use strict";

let accounts;

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
    let log = document.getElementById("log-form");
    if (log != null) {
        log.style.display = "block";
    }
}
function hideLogin() {
    let log = document.getElementById("log-form");
    if (log != null) {
        log.style.display = "none";
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
function login() {
    let user = document.getElementById("user");
    let pass = document.getElementById("pass");
    if (user != null && pass != null) {
        user = user.value;
        pass = pass.value;
    }
    else {
        console.log("%cSomething went wrong :(", "color: red; font-size: 400%");
        return;
    }
    let id = undefined;
    alert("Username: " + user + "\nPassword: " + pass);

    $.getJSON("https://mdn.github.io/learning-area/javascript/oojs/json/superheroes.json", function(json) { accounts = json });

    switch (user) {
        case 'Marek':
            id = 0;
            if (pass == "TheBigBoss") {
                window.open("https://maromanparkour.github.io/Salamander/logged.html");
            }
            else {
                alert("Username or password is incorrect!");
            }
            break;
        case 'Jani':
            id = 1;
            if (pass == "TheProgrammer") {
                window.open("https://maromanparkour.github.io/Salamander/logged.html");
            }
            else {
                alert("Username or password is incorrect!");
            }
            break;
        case 'Guest':
            id = 2;
            if (pass == "SomeoneElse") {
                window.open("https://maromanparkour.github.io/Salamander/logged.html");
            }
            else {
                alert("Username or password is incorrect!");
            }
            break;
        default:
            alert("Username or password is incorrect!");
    }
    
    console.log(accounts);
    if (accounts[id] != null) {
        document.getElementById("username").innerHTML = accounts[id].username;
        document.getElementById("img-profile").src = accounts[id].profile;
        document.getElementById("img-title").src = accounts[id].title;
        document.getElementById("usern").innerHTML = accounts[id].username;
        document.getElementById("password").innerHTML = accounts[id].password;
        document.getElementById("age").innerHTML = accounts[id].age;
        document.getElementById("function").innerHTML = accounts[id].function;
        document.getElementById("company").innerHTML = accounts[id].company;
    }

}

