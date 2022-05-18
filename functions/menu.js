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
    var lock = document.getElementById("lock");
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

    if (lock.src.match("light")) {
        lock.src = "img/lock-dark.png";
    }else{
        lock.src = "img/lock-light.png";
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



function login() {
    user = document.getElementById("user").value;
    pass = document.getElementById("pass").value;
    id = undefined;
    alert("Username: " + user + "\nPassword: " + pass)
/*
    let data = '{ "accounts" : ['
    '{"username":"Marek", "password":"TheBigBoss", "age":"16", "function":"CEO", "profile":"img/marek-profile.jpg", "company":"Salamander", "title":"img/marek-title.jpg"},'
    '{"username":"Jani", "password":"TheProgrammer", "age":"16", "function":"Programmer", "profile":"img/jani-profile.jpg", "company":"Fire The Fox", "title":"img/jani.title.jpg"},'
    '{"username":"Guest", "password":"SomeoneElse", "age":"***", "function":"Guest", "profile":"img/guest-profile.jpg", "company":"***", "title":"img/guest-title.jpg"} ]}';

    const accounts = JSON.parse(data);
*/
    switch(user) {
        case 'Marek':
            id = 0;
            if(pass == "TheBigBoss") {
                window.open("https://maromanparkour.github.io/Salamander/logged.html");
            }else{
                alert("Username or password is incorrect!");
            }
            break;

        case 'Jani':
            id = 1;
            if(pass == "TheProgrammer") {
                window.open("https://maromanparkour.github.io/Salamander/logged.html");
            }else{
                alert("Username or password is incorrect!");
            }
            break;

        case 'Guest':
            id = 2;
            if(pass == "SomeoneElse") {
                window.open("https://maromanparkour.github.io/Salamander/logged.html");
            }else{
                alert("Username or password is incorrect!");
            }
            break;

        default:
            alert("Username or password is incorrect!");
    }
/*
    document.getElementById("username").innerHTML = accounts[id].username;
    document.getElementById("img-profile").src = accounts[id].profile;
    document.getElementById("img-title").src = accounts[id].title;
    document.getElementById("usern").innerHTML = accounts[id].username;
    document.getElementById("password").innerHTML = accounts[id].password;
    document.getElementById("age").innerHTML = accounts[id].age;
    document.getElementById("function").innerHTML = accounts[id].function;
    document.getElementById("company").innerHTML = accounts[id].company;*/
}