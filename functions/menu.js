function showMenu() {
    document.getElementById("menu").style.width = "100%";
    document.getElementById("menu").style.padding = "1.5vw";
}

function hideMenu() {
    document.getElementById("menu").style.width = "0";
    document.getElementById("menu").style.padding = "0";
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