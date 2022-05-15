function showMenu() {
    document.getElementById("menu").style.width = "100%";
    document.getElementById("menu").style.padding = "1.5vw";
    document.getElementById("container").style.display = "grid";
}

function hideMenu() {
    document.getElementById("menu").style.width = "0";
    document.getElementById("menu").style.padding = "0";
    document.getElementById("container").style.display = "none";
}

function scrlUp() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }

function showLogo() {
    document.getElementById("logo").style.display = "block";
}

function hideLogo() {
    document.getElementById("logo").style.display = "none";
}

function darkMode() {
    var mode = document.getElementById("mode");
    var search = document.getElementById("search");
    var up = document.getElementById("up");
    document.body.classList.toggle("dark-mode");
    if (mode.src.match("light")) {
        mode.src = "img/darkmode.png";
    }else{
        mode.src = "img/lightmode.png";
    }

    if (search.src.match("light")) {
        search.src = "img/search-dark.png";
    }else{
        search.src = "img/search-light.jpg";
    }

    if (up.src.match("light")) {
        up.src = "img/up-dark.png";
    }else{
        up.src = "img/up-light.png";
    }
}

function showSearch() {
    document.getElementById("search-modal").style.display = "block";
}

function searchIt() {
    document.getElementById("search-modal").style.display = "none";
}

function showLogin() {
    document.getElementById("log-form").style.display = "block";
}

function hideLogin() {
    document.getElementById("log-form").style.display = "none";
}

var input = document.getElementById("input");
input.addEventListener("keypress", function(event) {
  if (event.key === "Enter") {
    event.preventDefault();
    document.getElementById("sbutton").click();
  }
});