function validar() {
	var nom,ape,pe,al,fn,email,password,password2,tel,dui,expresion;

	nom = document.getElementById("nom").value;
	ape = document.getElementById("ape").value;
	pe = document.getElementById("pe").value;
	al = document.getElementById("al").value;
	fn = document.getElementById("fn").value;
	email = document.getElementById("email").value;
	password = document.getElementById("password").value;
	password2 = document.getElementById("password2").value;
	tel = document.getElementById("tel").value;
	dui = document.getElementById("dui").value;

	expresion = /\w+@\w+.+[a-z]/;
    telefon =  /\^[0-9]{4}-?[0-9]{4}/;
    passwor =  /\((?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,30})/;
    nombre = /\^[a-zA-Z\s]+$/;
    apellido = /\^[a-zA-Z\s]+$/;


   if (nom === "" || ape === "" || pe === "" || al === "" || fn === "" || email === "" || password === "" || password2 === "" || tel === "" || dui === "" ||) {
   	alert("Todos los campos son obligatorios");
   	return false;
   }
   else if (nom.length>30) {
   	alert("El nombre es muy largo");
   	return false;
   }
    else if (!nombre.test(nom)) {
   		alert("Nombre inexistente");
   		return false;
   	}
   else if (ape.length>30) {
   	alert("El apellido es muy largo");
   	return false;
   	}

      }
    else if (!apellido.test(ape)) {
   		alert("apellido inexistente");
   		return false;
   	}

   	else if (pe.length>3) {
   	alert("Ese peso no existe");
   	return false;
   	}
   	else if (al.length>3) {
   	alert("No puedes medir eso");
   	return false;
   	}
   	else if (fn.length>30) {
   	alert("Fecha de nacimiento inexistente");
   	return false;
   	}
   	else if (email.length>50) {
   	alert("El correo es muy largo");
   	return false;
   	}
   	else if (!expresion.test(email)) {
   		alert("Correo invalido");
   		return false;
   	}
   	else if (password.length>30) {
   	alert("Contraseña muy larga");
   	return false;
   	}
    
   	else if (!passwor.test(password)) {
   		alert("No cumple los requisitos");
   		return false;
   	}

   	else if (password2.length>30) {
   	alert("No coincide con la contraseña anterior");
   	return false;
   	}
    else if (!passwor.test(password2)) {
   		alert("No coincide");
   		return false;

   	else if (tel.length>30) {
   	alert("Numero de telefono inexistente");
   	return false;
   	}
   	   
    else if (!telefon.test(tel)) {
   		alert("Numero no valido");
   		return false;
   	}
 
   	else if (dui.length>10) {
   	alert("Dui inexistente");
   	return false;
   }
   
}