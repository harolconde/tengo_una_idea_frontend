with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		ok = true;
		if(ok && username.value==""){
			ok=false;
			alert("Es necesario escribir un nombre de usuario");
			username.focus();
		}
		if(ok && password.value==""){
			ok=false;
			alert("ES necesario escribir una clave");
			password.focus();
		}
		if(ok){ submit(); }
	}
}
