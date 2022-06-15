function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
	let expires = "expires=" + d.toUTCString();
	console.log(cname);
	document.cookie =
		encodeURIComponent(cname) +
		"=" +
		encodeURIComponent(cvalue) +
		";" +
		expires +
		";path=/";
}

function getCookie(cname) {
	let name = cname.trim() + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(";");
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		// while (c.charAt(0) == " ") {
		// 	c = c.substring(1);
		// }
		c = c.trim();
		if (c.indexOf(name) == 0) {
			return "Existe " + c;
		}
	}
	return "No existe";
}

function dateCookies() {
	let dias = document.getElementById("elDate").value;
	console.log("dias" + dias);
	let resto = new Date(dias) - new Date();
	console.log("resto" + resto);
	let campo = resto / 1000 / 60 / 60 / 24;
	console.log("campo" + campo);
	console.log(Math.ceil(campo));
	setCookie(
		document.getElementById("nameCokie").value,
		document.getElementById("valueCokie").value,
		campo
	);
	listCookies();
}

document.getElementById("check").addEventListener("click", checkCookie);
function checkCookie() {
	if (navigator.cookieEnabled) {
		alert("Las cookies están activadas en el navegador");
	} else {
		alert("Las cookies están bloqueadas en el navegador");
	}
}

// console.log(document.getElementById("dia").value);
// console.log(document.getElementById("mes").value * 30);
// console.log(document.getElementById("anos").value * 365);

const select = document.getElementById("selector");

listCookies();
function listCookies() {
	var theCookies = document.cookie.split(";");
	// select.removeChild=""
	select.innerHTML = " ";

	for (var i = 1; i <= theCookies.length; i++) {
		var opt = document.createElement("option");
		opt.value = theCookies[i - 1] + "";
		opt.innerHTML = theCookies[i - 1].split("=")[0];
		select.appendChild(opt);
	}
}

function limpiarCookies() {
	alert();
	setCookie(select.value, "", -1);

	console.log(setCookie(select.value, "", -1));
}

function valoresCookies1() {
	setCookie(
		document.getElementById("nameCokie").value.trim(),
		document.getElementById("valueCokie").value.trim(),
		document.getElementById("anos").value * 365 +
			document.getElementById("mes").value * 30 +
			document.getElementById("dias").value
	);
	listCookies();
}

function infoCookies() {
	alert(getCookie(prompt("Nombre cookies ")));
}

let p = 5;
function j() {
	alert(p);
	console.log(p);
}
console.log(p);
