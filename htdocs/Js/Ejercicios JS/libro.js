"use strict";
let listaLibros = [];
class Libro {
	constructor(sn, titulo, autor, edicion, precio = 0, tematica = []) {
		this.sn = sn;
		this.titulo = titulo;
		this.autor = autor;
		this.edicion = edicion;
		this.precio = precio;
		this.tematica = tematica;
		listaLibros.push(this);
		this.pintarLibrosEnLaTabla();
	}

	pintarLibrosEnLaTabla() {
		let boton_eliminar = document.createElement("button");
		boton_eliminar.innerHTML = "Remove";
		boton_eliminar.value = "libro_" + this.sn;
		boton_eliminar.addEventListener("click", function () {
			document.getElementById(this.value).remove(); //innerHTML = "";
			//todo: eliminar de la lista
		});

		let td_sn = document.createElement("td");
		td_sn.innerHTML = this.sn;

		let td_titulo = document.createElement("td");
		td_titulo.innerHTML = this.titulo;

		let td_autor = document.createElement("td");
		td_autor.innerHTML = this.autor;

		let td_edicion = document.createElement("td");
		td_edicion.innerHTML = this.edicion;

		let td_precio = document.createElement("td");
		td_precio.innerHTML = this.precio + "€";

		let td_tematica = document.createElement("td");
		td_tematica.innerHTML = this.tematica;

		let td_eliminar = document.createElement("td");
		td_eliminar.appendChild(boton_eliminar);

		let tr = document.createElement("tr");

		tr.appendChild(td_sn);
		tr.appendChild(td_titulo);
		tr.appendChild(td_autor);
		tr.appendChild(td_edicion);
		tr.appendChild(td_precio);
		tr.appendChild(td_tematica);
		tr.appendChild(boton_eliminar);

		let tbody = document.getElementById("tabla1");
		tbody.appendChild(tr);
	}

	static pintarLasTematicasFormateadas(tematica) {
		let acumulado = "";
		console.log(tematica);
		for (let i = 0; i < tematica.length; i++) {
			acumulado += tematica[i] + ", ";
		}
		return acumulado.slice(0, -2);
	}
}

new Libro("ABC123", "Muse", "canelita", 3, 24, ["terror", "aventura", "drama"]);
new Libro("BCD234", "JS", "Mascarilla", 12, 0.21, ["romance", "comedia"]);
new Libro("BCD234", "Riquezas", "Marques", 10, 30, ["romance", "comedia"]);
new Libro("BCD234", "Paz", "Buho", 1, 5, ["romance", "comedia"]);
new Libro("BCD234", "Masa madre", "Panadero", 25);
console.log(listaLibros);
console.table();

// function sumar(x = 2, y = 2) {
// 	return x + y;
// }
// console.log(sumar());
