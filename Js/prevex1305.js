let input1 = false,
	input2 = false,
	input3 = false,
	input4 = true;
function checkbutton() {
	console.log(input1 + " " + input2 + " " + input3 + " " + input4 + " ");

	if (input1 && input2 && input3 && input4) {
		miForm.enviar.disabled = false;
	} else {
		miForm.enviar.disabled = true;
	}
}
const inputSalida = miForm.res;
function operacion($valor) {
	try {
		miForm.op.value = $valor;
		inputSalida.value = eval($valor);
		input1 = true;
		checkbutton();
	} catch (error) {
		miForm.res.value = "";
		input1 = false;
		checkbutton();
	}
	// finally{

	// }
}
function apellidos($texto) {
	// .replace(/ /g, "")
	let $totalPalabras = $texto.trim().replace(/ +/g, " ").split(" ");
	console.log($totalPalabras);
	if (
		$totalPalabras.length == 2 &&
		$totalPalabras[0].length >= 3 &&
		$totalPalabras[1].length >= 3
	) {
		if ($totalPalabras[1] != $totalPalabras[2]) {
			miForm.ap.style.backgroundColor = "green";
			console.log("OK");
			input2 = true;
			checkbutton();
		} else {
			//apellidos son iguales
			input2 = false;
			checkbutton();
		}
	} else {
		miForm.ap.style.backgroundColor = "red";
		//incorrecto
		input2 = false;
		checkbutton();
	}
}
function htmlDev($codigo) {
	let $codigoLimpio = $codigo.trim();
	$codigoError = $codigoLimpio;
	if (isNaN($codigoLimpio)) {
		$codigoSalida = $codigoLimpio
			.replaceAll("&lt;", "<")
			.replaceAll("&gt;", ">")
			.replaceAll("&quot;", '"')
			.replaceAll("&#39;", "'")
			.replaceAll("&#191;", "¿");
		input3 = true;
		checkbutton();
	} else {
		miForm.salidaFormateada.value = $codigoError;
		input3 = false;
		checkbutton();
	}
	console.log($codigoSalida); //&lt;p&gt;&lt;b&gt;&quot;hola&#39;,&lt;/b&gt; &#191;que tal?&lt;/p&gt;
	//miForm.$codigoSalida
	miForm.salidaCodigo.value = $codigoSalida;
	//miForm.salidaFormateada.value = $codigoSalida;
}
