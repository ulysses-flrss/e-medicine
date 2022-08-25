let eye = document.getElementById("eye1");
let eye2 = document.getElementById("eye2");

let password = document.getElementById("password");
let password2 = document.getElementById("password2");

eye.addEventListener("click", showHide, false);
eye2.addEventListener("click", showHide2, false);

function showHide() {
    if (password.type == "password") {
        password.type = "text";
        eye.className = "fa-solid fa-eye icon"
        eye.title = "Ocultar Contraseña"
    } else {
        password.type = "password";
        eye.className = "fa-solid fa-eye-slash icon"
        eye.title = "Mostrar Contraseña"
    }
}

//<i class="fa-solid fa-eye-slash"></i>
//<i class="fa-solid fa-eye"></i>



function showHide2 () {
    if (password2.type == "password") {
        password2.type = "text";
        eye2.className = "fa-solid fa-eye icon"
        eye2.title = "Ocultar Contraseña"
    } else {
        password2.type = "password"
        eye2.className = "fa-solid fa-eye-slash icon"
        eye2.title = "Mostrar Contraseña"
    }
}