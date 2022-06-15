function downloadCSV(csv, filename) {
	var csvFile;
	var downloadLink;

	// CSV file
	csvFile = new Blob([csv], { type: "text/csv" });

	// Download link
	downloadLink = document.createElement("a");

	// File name
	downloadLink.download = filename;

	// Create a link to the file
	downloadLink.href = window.URL.createObjectURL(csvFile);

	// Hide download link
	downloadLink.style.display = "none";

	// Add the link to DOM
	document.body.appendChild(downloadLink);

	// Click download link
	downloadLink.click();
}
function exportTableToCSV(filename) {
	var csv = [];
	var rows = document.querySelectorAll("table tr");

	for (var i = 0; i < rows.length; i++) {
		var row = [],
			cols = rows[i].querySelectorAll("td, th");

		for (var j = 0; j < cols.length; j++) row.push(cols[j].innerText);

		csv.push(row.join(","));
	}

	// Download CSV file
	downloadCSV(csv.join("n"), filename);
}
function removeTable() {
	document.getElementById("tabla1").remove();
}

// document.getElementById("Agregar").addEventListener("click", modificar);
document.getElementById("Agregar").addEventListener("click", confirmar);

function comprobarNumeros(supuestoNumero) {
	if (supuestoNumero != "" && !isNaN(supuestoNumero)) {
		if (supuestoNumero >= 0 && supuestoNumero <= 10) {
			return true;
		}
	}
	return false;
}

let listadeAlumnos[];
class Alumno {
	constructor(nombre, exam1, exam2, exam3) {
		this.nombre = nombre;
		this.exam1 = parseInt(exam1);
		this.exam2 = parseInt(exam2);
		this.exam3 = parseInt(exam3);
		this.total = (this.exam1 + this.exam2 + this.exam3) / 3;
		this.añadirTr();
		listadeAlumnos.push(this)
	}
	añadirTr() {
		let tr = document.createElement("tr");
		tr.id = this.nombre;
		let td_Nombre = document.createElement("td");
		let button = document.createElement("button");
		button.value = this.nombre;
		button.classList.add("botonSuprimir");
		button.innerHTML = this.nombre;
		td_Nombre.appendChild(button);

		button.addEventListener("click", function () {
			document.getElementById(this.value).remove();
		});

		let td_Exam1 = document.createElement("td");
		td_Exam1.innerHTML = exam1;

		let td_Exam2 = document.createElement("td");
		td_Exam2.innerHTML = exam2;

		let td_Exam3 = document.createElement("td");
		td_Exam3.innerHTML = exam3;

		let td_media = document.createElement("td");
		td_media.innerHTML = this.total;
		td_media.classList.add("total");

		if (this.total < 5) {
			td_media.classList.add("suspes");
		} else if (this.total < 7) {
			td_media.classList.add("aprovat");
		} else if (this.total < 9) {
			td_media.classList.add("notable");
		} else if (this.total < 11) {
			td_media.classList.add("excellent");
		} else if (this.total > 10) {
			td_media.classList.add("suspes");
		}

		let td_calificacion = document.createElement("td");
		if (this.total < 5) {
			td_calificacion.innerHTML = "Suspes";
			td_calificacion.classList.add("total");
			td_calificacion.classList.add("suspes");
		} else if (this.total < 7) {
			td_calificacion.innerHTML = "Aprovat";
			td_calificacion.classList.add("total");
			td_calificacion.classList.add("aprovat");
		} else if (this.total < 9) {
			td_calificacion.innerHTML = "Notable";
			td_calificacion.classList.add("total");
			td_calificacion.classList.add("notable");
		} else if (this.total < 11) {
			td_calificacion.innerHTML = "Excellent";
			td_calificacion.classList.add("total");
			td_calificacion.classList.add("excellent");
		} else if (this.total > 10) {
			td_calificacion.innerHTML = "No es possible";
			td_calificacion.classList.add("total");
			td_calificacion.classList.add("suspes");
		}
		tr.appendChild(td_Nombre);
		tr.appendChild(td_Exam1);
		tr.appendChild(td_Exam2);
		tr.appendChild(td_Exam3);
		tr.appendChild(td_media);
		tr.appendChild(td_calificacion);

		document.getElementById("tableData").appendChild(tr);
	}
}

function modificar() {
	let nombre = document.getElementById("input_Nombre").value;
	let exam1 = document.getElementById("input_Exam1").value;
	let exam2 = document.getElementById("input_Exam2").value;
	let exam3 = document.getElementById("input_Exam3").value;

	// document.getElementById("input_Tematica").value;
	if (
		document.getElementById(nombre) == null &&
		comprobarNumeros(exam1) &&
		comprobarNumeros(exam2) &&
		comprobarNumeros(exam3)
	) {
		new Alumno(nombre, exam1, exam2, exam3)
	} else {
		alert("Ya existe");
	}
}
function confirmar() {
	if (confirm("¿Estás seguro/a?")) {
		modificar();
	} else {
		alert("Cancelado");
	}
}

document.getElementById("mostrarAlumnos").addEventListener("click", () => {
	document.getElementById("mostrar").style.visibility = "visible";
});
function RemoveCell() {
	let tableData = document.getElementById("tableData");
	let tagName = document.getElementsByTagName("button");
	tableData.tagName.addEventListener("click", () => {
		tableData.tagName.th.remove();
	});
}
function genera_tabla() {
	var body = document.getElementsByTagName("main")[0];

	var tabla = document.createElement("table");
	var tblBody = document.createElement("tbody");

	for (var i = 0; i < 4; i++) {
		var hilera = document.createElement("tr");

		for (var j = 0; j < 4; j++) {
			var celda = document.createElement("td");
			var textoCelda = document.createTextNode("celda " + i + ", columna " + j);
			celda.appendChild(textoCelda);
			hilera.appendChild(celda);
		}
		tblBody.appendChild(hilera);
	}
	tabla.appendChild(tblBody);
	body.appendChild(tabla);
	tabla.setAttribute("border", "2");
}

document.getElementById("crearUF").addEventListener("click", () => {
	let title = prompt("Añadir UF");
	document.getElementById("uftitle").innerHTML = "<h2>" + title + "</h2>";
});
