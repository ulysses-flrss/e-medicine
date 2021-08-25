var eye = document.getElementById("eye1");
var eye2 = document.getElementById("eye2");

var password = document.getElementById("password");
var password2 = document.getElementById("password2");

eye.addEventListener("click", showHide, false);
eye2.addEventListener("click", showHide2, false);

function showHide() {
    if (password.type == "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}

function showHide2 () {
    if (password2.type == "password") {
        password2.type = "text";
    } else {
        password2.type = "password"
    }
}