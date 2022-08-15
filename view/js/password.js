let eye = document.getElementById("eye1");
let eye2 = document.getElementById("eye2");

let password = document.getElementById("password");
let password2 = document.getElementById("password2");

eye.addEventListener("click", showHide, false);
eye2.addEventListener("click", showHide2, false);

function showHide() {
    if (password.type == "password") {
        password.type = "text";
        eye.src = "../assets/imgs/eye_open.png"
    } else {
        password.type = "password";
        eye.src = "../assets/imgs/eye_close.png"
    }
}



function showHide2 () {
    if (password2.type == "password") {
        password2.type = "text";
        eye2.src = "../assets/imgs/eye_open.png"
    } else {
        password2.type = "password"
        eye2.src = "../assets/imgs/eye_close.png"
    }
}