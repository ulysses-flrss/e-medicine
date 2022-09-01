let select = document.getElementById("idPerfil");
let checkBox = document.getElementById("citaFamiliar")
let fn = document.getElementById("fn")
select.disabled = true;
fn.disabled = true;

checkBox.addEventListener("change", function () {
  if (checkBox.checked == true) {
    console.log("deshabilitando");
    select.disabled = false;
  } else {
    select.disabled = true;
  }
});