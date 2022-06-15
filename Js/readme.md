# Repositorio de JS

## Acceder a otro link-carpetas-subcarpetas

Crear links/carpetas/subcarpetas y acceder directamente

[JS](./js1.html)
[bienvenido a google](https://www.google.es/)

## Ejemplo de lista/tablas en Markdown

[ejemplosmarkdown](https://markdownlivepreview.com/)

## Console

Para lanzar las comprobaciones, contenido del div, variables q contengan texto...

`console.log("xxxxx")`

`console.log(typeof xxxxx)` --es una función que te dice el tipo de variable que tiene dentro (string, number, boolean... etc).

`console.error("fallo")`

`console.info("INFO")`

`console.warn("WARN")`

## Funciones básicas

`alert()`-->mostrar mensaje

`document.write()`para imprimir en pantalla

`.toPrecision()` sirve para redondear algún numero que quieras o necesites redondear, se indica en el parentesis.

`prompt()` sirve para solicitar datos al usuario

`parseint()` para convertir a string y coge el primer integro

`toUpperCase()` para poner texto en mayúsculas

`toLowerCase()` para poner texto en minúsculas

`document.write($texto.toUpperCase())`

`if(%2==0){} ` para indicar numeros pares

`if(%2==1){} ` para indicar numeros impares

`slice()` para extraer una parte que se le indique ej:ExplicacionesJS.html

Create array
` const fruits = ["Banana", "Orange", "Apple", "Mango"];`
Convertir a texto:
`toString()`

### XXXXXXXX

Concatenar 2 arrays:
`let array3= array1.concat(array2)`
`array1.concat(array2)`
`array1.concat(array2,array3)`
`array1.concat("texto")`
`arrayarray.splice(2,0,"a","bse")`

## Metodos de un array

``

## Propiedades

.length lo que hace es contar

## Tipos de variables

let var= 25 `Todas las variables en JS son del tipo let`

_var = global_var `variables globales : son las que empiezan con _`

\_var = const_var `es lo mismo que las variables globales`

\_PI = 3.1416... `ejemplo de variable global`

\_RA = `variable parecida a PI`

## Tipos de escapes

### Escapes con funcion

\n --> salto de carro

\r --> salto de carro raro

\t --> tab

\v --> tab vertical

\b --> space

\f --> avance form

### Escapes

`\"` --> printea doble cuote

`\'` --> printea comilla

` \`` ` --> printea accento abierto (solamente un accento, no dos)

`\\` --> printea un slash

## Operadores básicos

`+` --> sirve para sumar y también para concatenar

`*`

`-`

`/`

`++` --> +1

`--` --> -1

`**` --> Exponente<!--** -->

`%` --> Módulo

### Operadores de 2 grado

`=`

`+=`

`-=`

`*.` <!--* -->

`/=`

`%=`

`**` <!--** -->

## Nombres de salidas

`string`

`number`

`undefined`

`isNaN` `is non a numeric number`

`boolean`

`Infinity`

`matrices[xxx, xxxx, xxxxx]`

`objetos{}`

`json{}`

## Bucles

`if(condicion){ejecucion}`

`function cosa(parametros){ejecucion}`

`Array[]`

`for(){}`

`forin(){}`

`forout(){}`

`.foreach.`

`swicht(){ case a : _____ ; break case a : _____ ; break case a : _____ ; break default }`

`try { lo que quieras ejecutar lo que sea }/si se ejecuta bien, si no, pasa al catch/ catch (error) { echo/print/console/ mostrar el error}`
//sirve para contener errores y que así se siga ejecutando el código igualmente.

`while($x < $xxx){}`

`do{}` //ej:ExplicacionesJS.html

`++$i suma 1 y luego añade el valor de la variable $i`

`$i++ añade el valor de la variable $i y le suma 1`

### Ejemplos de bucles

`let $cantidad = $car.matriculas.length;`
console.log($cantidad);
			`for (let $i = 0; $i < $cantidad; $i++) {
				document.write($car.matriculas[$i] + "<br /><br />");
}`

    		document.write("<hr/>");
    		document.write("<br/><br/>");

    		let $cantidad1 = $car.matriculas.length;
    		let $a = 0;
    		while ($a < $cantidad1) {
    			document.write($car.matriculas[$a] (también sirve [$a++]) + "<br/><br/>");
    			$a++;
    			// $a = $a + 1;
    		}


    	let $b, $c;
    		console.log($b);//0
    		console.log($b++);//0
    		console.log($b);//1
    		console.log("");
    		console.log($c);//0
    		console.log(++$c);//1
    		console.log($c);//1

### Condiciones

valor1 == valor2 `compara que uno sea igual al otro`

valor1 != valor2 `dice que sean diferentes`

valor1 >= valor2 `mayor o igual`

valor1 <= valor2 `menor o igual`

valor1 < valor2 `estrictamente mayor`

valor1 > valor2 `estrictamente menor`

valor1 === valor2 `estrictamente igual, le haces que 1 tome el valor de 1 y no de 'true' `
`es importante al comparar byte a byte 0000100`

1 == 2 `te pondria 00true00 y sería un ERROR!`

valor1 !== valor2 `es estrictamente diferente`

valor1 ? valor2 `operador ternario, se utiliza de normal para ` `3 == 5 ? console.log("asd") : console.log("jlk");`
` ? xxxxxxx : = if xxxxxxx else; ?? = if;`

## Movilizadores

& AND

| OR

~ NOT

^ XOR

<< left shift

`>>`

`> > >` unsigned right shift

`console.log(0101 >> 1);` `Para hacer comparaciones en código binario`

`console.log(5 >> 1);` `el 0101 es el valor 5 en binario y te dice la posición que ocupa`

## Importar archivo/s de JS

`<script src="./file.js"></script>`

## Ejemplos varios

<script>
			alert("alert \n Hola \t que \r tal?"); //\n para salto de linea \t es tabulación \r salto de linea

			console.log("log");
			console.error("error");
			console.info("Info");
			console.warn("warn");
			prompt("Prom para pedir");

    		var1 = "función var1";
    		document.write(var1);

    		console.log(typeof var1);
    		console.log(typeof NaN);
    		var2 = 3;
    		var3 = 4;
    		varsalida = var2 + var3;
    		console.log(var2 + "+" + var3 + "=" + varsalida);
    		console.log(var2 + "+" + var3 + "=" + (var2 + var3));
    		console.log(var2 + "+" + var3 + "=" + (3 + 4));
    		console.log(var2 + "+" + var3 + "=" + 7);
    		console.log(3 + "+" + 4 + "=" + 7);
    		console.log("3 + 4 = 7");
    		global = _loquesea;
    		_PI = 3.1416;
    		let var7 = 25; //todas las variables en JS son del tipo let.

    		/*
            string
            number
            undefined
            NaN
            boolean
            Infinity
            matrices[xxx, xxxx, xxxxx]
            objetos{}
            json{}
            */

    		//primitivas
    		int;
    		string;
    		boleean;
    		float;

    		//nuevas
    		Int;
    		String;
    		Boolean;
    		Float;

</script>

## Donde y cuando usar el script

Por lo general irá al principio, para cargar el archivo o el js escrito, al igual que el CSS, pero hay excepciones que hacen que se pueda añadir otro script al final del body para hacer pruebas en el archivo, como por ejemplo:
`//console` `//alert` `//document.write`
_(SIMPLEMENTE PARA HACER PRUEBAS, NO SE DEBE DEJAR)_

## Selectores

`document.getElementById;`

`document.getElementsByClassName;` //se le pueden añadir varias clases separandolas con espacio

`document.getElementsByName;`

`document.getElementsByTagName;`

### Ejemplos:

    document.getElementById("nombre").innerHTML = "asd";
    //modifica el contenido dentro del atributo id

    document.getElementById("nombre").innerHTML += "ASD";
    //añade al contenido lo que se le aplique

    document.getElementById("nombre").style.backgroundColor = "#848484";

    console.log(document.getElementsByClassName("asd")); //asd
    console.log(document.getElementsByClassName("asd")[0]);

    document.getElementsByClassName("asd")[0].style.backgroundColor = "red"; //asd

    console.log(document.getElementsByClassName("asd").length);
    let $cantidad = document.getElementsByClassName("asd").length;

    for (let $i = 0; $i < $cantidad; $i++) {
    	document.getElementsByClassName("asd")[$i].style.backgroundColor =
    		"green";
    	console.log("$i=" + $i);
    }

    document.getElementsByName(); //juan

    `document.getElementsByTagName`

## Eventos

`onclick` // Cuando se hace click en el botón con este atributo se le aplican sus caracteristicas que tenga vinculadas.

`onmouseover` // Cuando pasas por encima de donde se aplica el atributo se activa

`onmouseout` // Cuando te colocas encima de donde se aplica el atributo no funciona, solamente funcionará al salir de donde se está aplicando

`onkeyup` // Cada vez que clickas una tecla, hasta que se suelta.

`onkeydown` // Desde el primer momento que pulsas una tecla.

`onkeypress` //

`onload="fun4()"`

`Más eventos:`
(https://www.elated.com/events-and-event-handlers/)

# Errores en JS

# cookies

mirar si están bloqueadas en el navegador y hacer

if(navigator.cookieEnabled){
//se pueden crear
}else{
alert("Las cookies están bloqueadas en el navegador")
}

# WCAG

¿Qué son las pautas WCAG 20?
Las Pautas de Accesibilidad de Contenido Web 2.0 definen cómo crear un contenido web más accesible para personas con discapacidad. La accesibilidad considera un amplio rango de discapacidades, como son las visuales, auditivas, físicas, del habla, cognitivas, relativas al lenguaje, de aprendizaje y neurológicas.

# Mouse

https://javascript.info/mouse-events-basics

## Ctrl+shift+click ---

<button id="button">Alt+Shift+Click on me!</button>

<script>
  button.onclick = function(event) {
    if (event.altKey && event.shiftKey) {
      alert('Hooray!');
    }
  };
</script>

## Coordinates: clientX/Y, pageX/Y

<input onmousemove="this.value=event.clientX+':'+event.clientY" value="Mouse over me">

## Doble click

<span ondblclick="alert('dblclick')">Double-click me</span>

## Preventing copying

<div oncopy="alert('Copying forbidden!');return false">
  Dear user,
  The copying is forbidden for you.
  If you know JS or HTML, then you can get everything from the page source though.
</div>
