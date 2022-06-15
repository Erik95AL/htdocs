/*BOTON 1 CREAR COOKIES */

document
	.getElementById("funCrearCookie")
	.addEventListener("click", funCrearCookie);

function funCrearCookie() {
	document.getElementById("preg1").style.visibility = "visible";
	document.getElementById("fecha").style.visibility = "visible";
	document.getElementById("cantidades").style.visibility = "visible";
}
/*INPUT DATE */
document.getElementById("funInputDate").addEventListener("click", funInputDate);
function funInputDate() {
	let dias = document.getElementById("inputDate").value;
	let resto = new Date(dias) - new Date();
	let campo = resto / 1000 / 60 / 60 / 24;
	console.log(Math.ceil(campo));

	setCookie(
		document.getElementById("nameCookie").value,
		document.getElementById("nameValue").value,
		campo
	);
	console.log(document.getElementById("nameCookie").value);
	console.log(document.getElementById("nameValue").value);
	console.log(document.getElementById("inputDate").value);
}

/*INPUT CANTIDADES */
document
	.getElementById("funInputCantidades")
	.addEventListener("click", funInputCantidades);
function funInputCantidades() {
	let anos = new Number(document.getElementById("anos").value * 365);
	let meses = new Number(document.getElementById("meses").value * 30);
	let dias = new Number(document.getElementById("dias").value);
	let suma = anos + meses + dias;

	setCookie(
		document.getElementById("nameCookie").value,
		document.getElementById("nameValue").value,
		suma
	);
	console.log(document.getElementById("nameCookie").value);
	console.log(document.getElementById("nameValue").value);
	console.log(anos + meses + dias);
	listCookies();
}
/*LEER COOKIES */
document
	.getElementById("funLeerCookies")
	.addEventListener("click", funLeerCookies);
function funLeerCookies() {
	let theCookies = document.cookie.split(";");
	for (let i = 0; i < theCookies.length; i++) {
		console.log(theCookies[i - 1]);
	}
}
/*MODIFICAR COOKIE */
document
	.getElementById("funModificarCookie")
	.addEventListener("click", funModificarCookie);
function funModificarCookie() {
	let var1 = document.getElementById("llistaGaletes").value;
	let var2 = getCookie(var1);
	document.getElementById("preg1").style.visibility = "visible";
	document.getElementById("fecha").style.visibility = "visible";
	document.getElementById("cantidades").style.visibility = "visible";
	console.log(getCookie(var1));
	document.getElementById("nameCookie").value = var1;
	document.getElementById("nameValue").value = var2;
}

/*BORRAR COOKIES */
document
	.getElementById("funBorrarCookie")
	.addEventListener("click", funBorrarCookie);
function funBorrarCookie() {
	alert(
		removeCookie(document.getElementById("llistaGaletes").value, listCookies())
	);
}

/*DESPLEGABE LISTCOOKIES */

select = document.getElementById("llistaGaletes");
listCookies();
function listCookies() {
	var theCookies = document.cookie.split(";");
	select.innerHTML = ""; /*vacia la lista selector */
	for (var i = 1; i <= theCookies.length; i++) {
		var opt = document.createElement("option");
		let split = theCookies[i - 1].split("=")[0].trim();
		opt.value = split;
		opt.innerHTML = split;
		select.appendChild(opt);
	}
}
