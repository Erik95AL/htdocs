function checkbutton() {
	let input0 = false,
		input1 = false,
		input2 = false,
		input3 = false,
		input4 = false;

	if (input0 && input1 && input2 && input3 && input4) {
		formulario.campoButton.disabled = false;
	} else {
		formulario.campoButton.disabled = true;
	}
}
function campoNombre($nombre) {
	let $totalPalabras = $nombre.trim(/ +/g, "").replace().split(" ");
	console.log($totalPalabras);
	if ($totalPalabras.length == 2 && $totalPalabras[0].length >= 3) {
		console.log("OK");
		if ($totalPalabras[1] != $totalPalabras[2]) {
			input0 = true;
			checkbutton();
			document.getElementsByTagName("input")[0].classList.remove("corregir");
			document.getElementsByTagName("input")[0].classList.add("correcte");
			document.getElementById("Error").style.visibility = "hidden";
		} else {
			input0 = false;
			checkbutton();
			document.getElementsByTagName("input")[0].classList.remove("correcte");
			document.getElementsByTagName("input")[0].classList.add("corregir");
			document.getElementById("Error").style.visibility = "visible";
		}
	} else {
		input0 = false;
		checkbutton();
		document.getElementsByTagName("input")[0].classList.remove("correcte");
		document.getElementsByTagName("input")[0].classList.add("corregir");

		document.getElementById("Error").style.visibility = "visible";
	}
}

function campoApellidos(texto) {
	let totalPalabras = texto.trim(/ +/g, "").replace().split(" ");
	console.log(totalPalabras);
	if (
		totalPalabras.length == 3 &&
		totalPalabras[0].length >= 3 &&
		totalPalabras[1].length >= 3 &&
		totalPalabras[2].length >= 3
	) {
		console.log("OK");
		if (totalPalabras[1] != totalPalabras[2]) {
			input1 = true;
			checkbutton();
			document.getElementsByTagName("input")[1].classList.remove("corregir");
			document.getElementsByTagName("input")[1].classList.add("correcte");
		} else {
			input1 = false;
			checkbutton();
			document.getElementsByTagName("input")[1].classList.remove("correcte");
			document.getElementsByTagName("input")[1].classList.add("corregir");
		}
	} else {
		input1 = false;
		checkbutton();
		document.getElementsByTagName("input")[1].classList.remove("correcte");
		document.getElementsByTagName("input")[1].classList.add("corregir");
	}
}

function validarEmail(valor) {
	if (/^\w+@[a-zA-A_]+?\.[a-zA-Z]{2,3}$/.test(valor)) {
		console.log("La dirección de email " + valor + " es correcta.");
		input2 = true;
		checkbutton();
		document.getElementsByTagName("input")[2].classList.remove("corregir");
		document.getElementsByTagName("input")[2].classList.add("correcte");
	} else {
		console.log("La dirección de email es incorrecta.");
		input2 = false;
		checkbutton();
		document.getElementsByTagName("input")[2].classList.remove("correcte");
		document.getElementsByTagName("input")[2].classList.add("corregir");
	}
}

function validarPass($pass) {
	if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{4,}$/.test($pass)) {
		console.log("La dirección de email " + $pass + " es correcta.");
		input3 = true;
		checkbutton();
		document.getElementsByTagName("input")[3].classList.remove("corregir");
		document.getElementsByTagName("input")[3].classList.add("correcte");
	} else {
		console.log("La dirección de email es incorrecta.");
		input3 = false;
		checkbutton();
		document.getElementsByTagName("input")[3].classList.remove("correcte");
		document.getElementsByTagName("input")[3].classList.add("corregir");
	}
}

function validarDni($dni) {
	let $numero;
	let $letr;
	let $letra;
	let $expresion_regular_dni;

	$expresion_regular_dni = /^\d{8}[a-zA-Z]$/;
	if ($expresion_regular_dni.test($dni) == true) {
		$numero = $dni.substr(0, $dni.length - 1);
		$letr = $dni.substr($dni.length - 1, 1);
		$numero = $numero % 23;
		$letra = "TRWAGMYFPDXBNJZSQVHLCKET";
		$letra = $letra.substring($numero, $numero + 1);
		$input4 = true;
		checkbutton();
		document.getElementById("dniError").style.visibility = "hidden";
		if ($letra != $letr.toUpperCase()) {
			console.log("DNI erroneo, la letra del NIF no se corresponde");

			document.getElementsByTagName("input")[4].classList.remove("correcte");
			document.getElementsByTagName("input")[4].classList.add("corregir");
			document.getElementById("dniError").style.visibility = "visible";
		} else {
			console.log("DNI correcto");

			document.getElementsByTagName("input")[4].classList.remove("corregir");
			document.getElementsByTagName("input")[4].classList.add("correcte");
			document.getElementById("dniError").style.visibility = "hidden";
		}
	} else {
		$input4 = false;
		checkbutton();
		document.getElementById("dniError").style.visibility = "visible";
	}
}

const $mensaje = document.getElementById("missatge");
const $contador = document.getElementById("form_count_chars_b");

mensaje.addEventListener("input", function (e) {
	const $target = e.$target;
	const $longitudMax = $target.getAttribute("maxlength");
	const $longitudAct = $target.value.length;
	$contador.innerHTML = $longitudAct / $longitudMax;
});
