function ValidatePassword(campo, nombreCampoError) {
	let texto = campo.value.trim().replaceAll(" ", "");
	let largoTexto = texto.legth;
	if (largoTexto > 3) {
		if (largoTexto < 8) {
			//7a4
			if (letras(texto)) {
				cambiarCorrectoIncorrecto(campo, nombreCampoError, true);
			} else {
				cambiarCorrectoIncorrecto(campo, nombreCampoError, false);
			}
		} else if (largoTexto < 12) {
			//11a8
			let bloque1 = texto.slice(4);
			let bloque2 = texto.slice(4, 8);
		} else {
			//inf a 12
			let bloque1 = texto.slice(4);
			let bloque2 = texto.slice(4, 8);
			let bloque3 = texto.slice(8, 12);
		}
	} else {
		cambiarCorrectoIncorrecto(campo, nombreCampoError, false);
	}
}
//cambiarCorrectoIncorrecto(campo, nombreCampoError, true);

function letras(texto) {
	let letra1 = texto.slice(1);
	let letra2 = texto.slice(1, 2);
	let letra3 = texto.slice(2, 3);
	let letra4 = texto.slice(3, 4);
	if (
		letra1.toUpperCase() == letra1 ||
		letra2.toUpperCase() == letra2 ||
		letra3.toUpperCase() == letra3 ||
		letra4.toUpperCase() == letra4
	) {
		//true
	}
	if (
		letra1 <= 9 ||
		letra2.toUpperCase() == letra2 ||
		letra3.toUpperCase() == letra3 ||
		letra4.toUpperCase() == letra4
	) {
		//true
	}
}

function ValidatePassword(campo, nombreCampoError) {
	let texto = campo.value.trim().replaceAll(" ", "");
	let largoTexto = texto.legth;
	if (largoTexto > 3) {
		if (largoTexto < 8) {
			//7a4
			if (letras(texto)) {
				cambiarCorrectoIncorrecto(campo, nombreCampoError, true);
			} else {
				cambiarCorrectoIncorrecto(campo, nombreCampoError, false);
			}
		} else if (largoTexto < 12) {
			//11a8
			let bloque1 = texto.slice(4);
			let bloque2 = texto.slice(4, 8);
		} else {
			//inf a 12
			let bloque1 = texto.slice(4);
			let bloque2 = texto.slice(4, 8);
			let bloque3 = texto.slice(8, 12);
		}
	} else {
		cambiarCorrectoIncorrecto(campo, nombreCampoError, false);
	}
}
//cambiarCorrectoIncorrecto(campo, nombreCampoError, true);

const mayuscula = /[A-Z]/;
const minuscula = /[a-z]/;
const numero = /[0-9]/;
const caracter = /[!@#\$%\^\&*\)\(+=._-]/;
letras("Aa0@");
function letras(texto) {
	let var1 = false;
	let var2 = false;
	let var3 = false;
	let var4 = false;
	if (mayuscula.test(texto)) {
		console.log("mayusucula");
	}
	if (minuscula.test(texto)) {
		console.log("minuscula");
	}
	if (numero.test(texto)) {
		console.log("numero");
	}
	if (caracter.test(texto)) {
		console.log("caracter");
	}
	if (var1 && var2 && var3 && var4) {
		return true;
	}
	return false;
}
