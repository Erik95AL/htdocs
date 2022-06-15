const inputNom = document.getElementById("inputNom");
const inputIdenti = document.getElementById("inputIdenti");
const inputPreu = document.getElementById("inputPreu");
listaProductes = [];

document.getElementById("añadir").addEventListener("click", () => {
	document.getElementById("expande").style.visibility = "visible";
});

class Producto {
	constructor(nom, identificador, preu) {
		this.nom = nom;
		this.identificador = identificador;
		this.preu = preu;
		listaProductes.push(this);
		//console.log(listaProductes);
		mostrarTabla(listaProductes);
	}
}
function mostrarTabla(lista) {
	console.table(lista);
}
document
	.getElementById("orden_nombre")
	.addEventListener("click", mostrarTablaOrdenadaNombre);
function mostrarTablaOrdenadaNombre() {
	let listaProductesDup = [].concat(listaProductes);
	listaProductesDup.sort((a, b) => {
		if (a.nom > b.nom) {
			return +1;
		}
		if (a.nom < b.nom) {
			return -1;
		}
		return 0;
	});
	console.table(listaProductesDup);
}

document
	.getElementById("orden_iu")
	.addEventListener("click", mostrarTablaOrdenadaIdentificador);
function mostrarTablaOrdenadaIdentificador() {
	let listaProductesDup2 = [].concat(listaProductes);
	listaProductesDup2.sort((a, b) => {
		if (a.identificador > b.identificador) {
			return +1;
		}
		if (a.identificador < b.identificador) {
			return -1;
		}
		return 0;
	});
	console.table(listaProductesDup2);
}
document
	.getElementById("orden_precio")
	.addEventListener("click", mostrarTablaOrdenadaPrecio);
function mostrarTablaOrdenadaPrecio() {
	let listaProductesDup3 = [].concat(listaProductes);
	listaProductesDup3.sort((a, b) => {
		if (a.preu > b.preu) {
			return +1;
		}
		if (a.preu < b.preu) {
			return -1;
		}
		return 0;
	});
	console.table(listaProductesDup3);
}
document
	.getElementById("afegir_producte")
	.addEventListener("click", funCrearProducto);
function funCrearProducto() {
	let nom = inputNom.value;
	let identificador = inputIdenti.value;
	let preu = inputPreu.value;
	let booleNom, boolPreu;
	booleNom = boolPreu = false;

	if (nom != "") {
		booleNom = true;
	}
	if (identificador == "") {
		identificador = generarIdentificadorAlfanumerico();
	}
	if (preu != "") {
		preu = preu.replaceAll(",", ".");
		if (!isNaN(preu)) {
			boolPreu = true;
		}
	}
	console.log(nom + " " + identificador + " " + preu);
	console.log(booleNom, boolPreu);

	if (booleNom && boolPreu) {
		new Producto(nom, identificador, preu);
	} else {
		console.log("ERROR!! Introduir valor en Nom y Preu");
	}
}

function generarIdentificadorAlfanumerico(cantidad = 8) {
	let characters =
		"abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMONPRSTUVWXYZ0123456789";

	let result = "";

	let charactersLength = characters.length;

	for (var i = 0; i < cantidad; i++) {
		result += characters.charAt(Math.floor(Math.random() * charactersLength));
	}
	//todo:comprobar q el result no existe en la lista
	return result;
}
//testing
new Producto("abc", "zzzZZZzz", 122);
new Producto("zxs", "bbBBBBbb", 3);
new Producto("bcd", "AAaaaaaa", 1);
new Producto("acd", "lllKKKmn", 12);
new Producto("acd", "lllKKKmn", -12.1);
new Producto("acd", "lllKKKmn", -12);
new Producto("acd", "lllKKKmn", -12.2);
new Producto("acd", "lllKKKmn", -222.8);
new Producto("acd", "lllKKKmn", -120.8);

// console.assert();
//listaProductes = []; sirve para vaciar la lista
