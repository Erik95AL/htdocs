//console.log("hola");
// document.getElementById("nombre").style.backgroundColor = "#ffffff";
// $var1 = "cosa";
// document.write($var1);
// console.log(typeof $var1);
function cosa(texto) {
	alert(texto);
}

cosa("otro texto");

let $var1 = 1;
$var1 = 2;
cosa1();
function cosa1() {
	$var1 = 5;
}
console.log($var1);

// si no llamas a la funcion "cosa1" el valor de la variable será 2, ya que el segundo se superpone sobre la primera variable con el mismo nombre
// _algo $algo algo se le puede llamar de varias formas a una variable, teniendo en cuenta que con el mismo nombre puedes tener varios datos, simplemente cambia el tener o no algo igual delante p.ej:(_algo, $algo, algo)

//dentro de funciones es preferible declarar con let o var y fuera puedes hacerlo con el resto.

var $var2 = 1;
$var2 = 2;
cosa2();
{
	$var = 5;
}
console.log($var2);
