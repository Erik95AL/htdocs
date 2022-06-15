document.getElementById("enable").addEventListener("click", () => {
	alert(CheckcookieEnabled());
});

function CheckcookieEnabled() {
	if (navigator.cookieEnabled) {
		return "se pueden crear cookies xq no esta bloqueadas";
	} else {
		return "coockies estan bloquedas en el navegador";
	}
}
// console.assert(
// 	CheckcookieEnabled() == "se pueden crear cookies xq no esta bloqueadas"
// );

function setCookie(cname, cvalue, exdays) {
	const d = new Date();
	d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
	let expires = "expires=" + d.toUTCString();
	document.cookie =
		encodeURIComponent(cname) +
		"=" +
		encodeURIComponent(cvalue) +
		";" +
		expires +
		";path=/";
	return cname;
}

function detectaCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(";");
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		c = c.trim();
		if (c.indexOf(name) == 0) {
			return "La cookie:     " + cname + "  :SI EXISTE";
		}
	}
	return "NO Existe";
}
// console.assert(
// 	detectaCookie(setCookie("cname", "cvalue", 1)) ==
// 		"La cookie:     " + "cname" + "  :SI EXISTE"
// );

function getCookie(cname) {
	let name = cname.trim() + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(";");
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		while (c.charAt(0) == " ") {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
			//	return( "\nNombre Cookie: " + cname+"\nNombre Value:  " + c.substring(name.length, c.length));
		}
	}
	return "La cookie introducida NO existe";
}
function getCookieLeer(cname) {
	let name = cname.trim() + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(";");
	for (let i = 0; i < ca.length; i++) {
		let c = ca[i];
		c = c.trim();
		/* c.indexOF name comparar que c sea igual a name y devuelve lo*/
		if (c.indexOf(name) == 0) {
			return "Nombre Cookie: " + cname;
			// +	"\nNombre Value:  " +
			// 	c.substring(name.length, c.length)
		}
	}
	return "La cookie introducida NO existe";
}

// console.assert(getCookieLeer("cname") == "Nombre Cookie: " + "cname");

function checkCookie() {
	let user = getCookie("nameUser");
	if (user != "") {
		alert("Welcome again " + user);
	} else {
		user = prompt("Please enter your name:", "");
		if (user != "" && user != null) {
			setCookie("nameUser", user, 30);
		}
	}
}
function removeCookie(cname) {
	if (cname != "" && cname != null) {
		setCookie(cname, "", -1);
		return "Cookie eliminada correctamente";
	} else {
		return "La cookie NO  puede ser eliminada";
	}
}
// console.assert(detectaCookie(removeCookie("cname")) == "NO Existe");
