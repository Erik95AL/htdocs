const arrayFotos = [
	"céline.jpg",
	"enrique-hoyos.jpg",
	"shad-meeg.jpg",
	"tatiana.jpg",
	"empty.jpg",
];
const posicionesArray = arrayFotos.length;
const imagen = document.getElementById("imagen");
let posicion = 0;
function contar(number) {
	if (number != 0) {
		posicion = posicion + number;
		if (posicion > posicionesArray - 1) {
			posicion = 0;
		}
		if (posicion < 0) {
			posicion = posicionesArray - 1;
		}
	} else {
		posicion = 0;
	}
	// document.getElementById("imagen");
	imagen.src = "./carousel/" + arrayFotos[posicion];
	imagen.alt = arrayFotos[posicion].split(".")[0];
	imagen.title = arrayFotos[posicion]
		.split(".")[0]
		.replace(/^\w/, (c) => c.toUpperCase());
	document.getElementById("numeroFoto").innerHTML = posicion;
}
