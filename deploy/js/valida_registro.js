with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Es necesario escribir un nombre de usuario");
			username.focus();
		}
		if(ok &&fullname.value==""){
			ok=false;
			alert("Es necesario escribir un nombre de usuario");
			fullname.focus();
		}
		if(ok && email.value==""){
			ok=false;
			alert("Se debe ingresar un e-mail");
			email.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("Es necesario escribir una clave");
			password.focus();
		}
		if(ok && confirm_password.value==""){
			ok=false;
			alert("Escriba la confirmacion de la clave");
			confirm_password.focus();
		}

		if(ok && password.value!= confirm_password.value){
			ok=false;
			alert("Los passwords no coinciden");
			confirm_password.focus();
		}


		if(ok){ submit(); }
	}
}
