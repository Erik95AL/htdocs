const arrayFotos = ["fondo5.jpg", "fondo6.jpeg", "pic_trulli.jpg"];
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
	imagen.src = "./" + arrayFotos[posicion];
	imagen.alt = arrayFotos[posicion].split(".")[0];
	imagen.alt = arrayFotos[posicion].split(".")[1];
	imagen.alt = arrayFotos[posicion].split(".")[2];
	imagen.title = arrayFotos[posicion].split(",");
}
