const div = document.getElementById("tablas");

let listaDistribuidor = [];
class Distribuidor {
	constructor(nameDistribuidor, listaLibreriasReceptor) {
		this.nameDistribuidor = nameDistribuidor;
		this.listaLibrerias = listaLibreriasReceptor.filter((n) => n);
		this.listaLibros = [];
		listaDistribuidor.push(nameDistribuidor);

		let divDistribuidor = document.createElement("div");
		divDistribuidor.id = nameDistribuidor;
		divDistribuidor.style.backgroundColor = "green";
		let h2 = document.createElement("h2");
		h2.innerHTML = nameDistribuidor;
		h2.style.textAlign = "center";
		divDistribuidor.appendChild(h2);
		let tabla = document.createElement("table");
		//HEAD
		let thead = document.createElement("thead");
		let tr_thead = document.createElement("tr");
		//añadir librerias
		//console.log(this.listaLibrerias);
		tr_thead.appendChild(document.createElement("td"));
		for (let i = 0; i < this.listaLibrerias.length; i++) {
			// console.log(this.listaLibrerias[i]);
			let td = document.createElement("td");
			td.innerHTML = this.listaLibrerias[i];
			tr_thead.appendChild(td);
		}
		let td_total = document.createElement("td");
		td_total.innerHTML = "Total: ";
		tr_thead.appendChild(td_total);
		thead.appendChild(tr_thead);
		tabla.appendChild(thead);
		//BODY
		let tbody = document.createElement("tbody");
		tabla.appendChild(tbody);
		// let tr = document.createElement("tr");
		// let td1 = document.createElement("td");
		// let input = document.createElement("input");
		// input.placeholder = "Libreria";
		// td1.appendChild(input);
		// let button = document.createElement("button");
		// button.innerHTML = "create new Libreria";
		// button.addEventListener("click", () => {
		//  let nombreLibreria = input.value;
		//  if (this.listaLibrerias.includes(nombreLibreria)) {
		//      alert("Error: ...");
		//  } else {
		//      this.listaLibrerias.push(new Libreria(nombreLibreria).nameLibreria);

		//      let otroTd = document.createElement("td");
		//      otroTd.innerHTML = nombreLibreria;
		//      otroTr.appendChild(otroTd);
		//  }
		// });
		// td1.appendChild(button);
		// tr.appendChild(td1);

		// let td2 = document.createElement("td");
		// let input1 = document.createElement("input");
		// input1.placeholder = "Libro";
		// td2.appendChild(input1);
		// let button2 = document.createElement("button");
		// button2.innerHTML = "create new Libro";
		// button2.addEventListener("click", () => {
		//  let nombreLibro = input1.value;
		//  if (this.listaLibros.includes(nombreLibro)) {
		//      alert("Error: ...");
		//  } else {
		//      this.listaLibros.push(new Libro(nombreLibro).nameLibro);
		//      let trLibro = document.createElement("tr");
		//      let tdNombreLibro = document.createElement("td");
		//      tdNombreLibro.innerHTML = nombreLibro;
		//      trLibro.appendChild(tdNombreLibro);
		//      tbody.appendChild(trLibro);
		//  }
		// });
		// td2.appendChild(button2);
		// tr.appendChild(td2);

		// tabla.appendChild(tr);
		divDistribuidor.appendChild(tabla);

		let botonAñadirLibro = document.createElement("button");
		botonAñadirLibro.innerHTML = "Añadir nuevo libro";
		botonAñadirLibro.addEventListener("click", () => {
			let tr_body = document.createElement("tr");
			let td_nombre = document.createElement("td");
			td_nombre.innerHTML = prompt("nombre del libro");
			tr_body.appendChild(td_nombre);
			tbody.appendChild(tr_body);
			for (let i = 0; i < this.listaLibrerias.length; i++) {
				let relleno = document.createElement("td");
				relleno.innerHTML = prompt("precio para" + this.listaLibrerias[i]);
				tr_body.appendChild(relleno);
			}
			tbody.appendChild(tr_body);
		});
		divDistribuidor.appendChild(botonAñadirLibro);

		let botonEliminarTabla = document.createElement("button");
		botonEliminarTabla.innerHTML = "Eliminar tabla";
		botonEliminarTabla.addEventListener("click", () => {
			document.getElementById(this.nameDistribuidor).remove();
		});
		divDistribuidor.appendChild(botonEliminarTabla);

		div.appendChild(divDistribuidor);
	}
}
function createDistribuidor(nameDistribuidorInput, listadelibreriasInput) {
	if (listaDistribuidor.includes(nameDistribuidorInput)) {
		alert('Error: Distribuidor name "' + nameDistribuidorInput + '" exist');
	} else {
		let lista = listadelibreriasInput.trim().replaceAll("  ", " ").split(",");
		for (let i = 0; i < lista.length; i++) {
			let counter = 0;
			for (let x = 0; x < lista.length; x++) {
				if (lista[i] === lista[x]) {
					counter++;
				}
			}
			if (counter > 1) {
				lista.splice(i, 1);
			}
		}
		// console.log(lista);
		new Distribuidor(nameDistribuidorInput, lista);
	}
}
class Libro {
	constructor(nameLibro) {
		this.nameLibro = nameLibro;
	}
}

function recolectorDeLibrerias() {
	do {
		let promp = prompt("Añadir nueva libreria");
		if (promp != "" && isNaN(promp)) {
			document.getElementById("librerias").value += promp + ",";
		}
	} while (confirm("Añadir otro?"));
}
