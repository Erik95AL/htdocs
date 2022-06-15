<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Plantilla códigos</title>
        <meta name="author" content="Erik Aguirre">
        <meta name="description" content="código curso IFCD0110">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://img.icons8.com/nolan/344/sugarcane.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
        <link rel="stylesheet" href="/paginaselect.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="navbar">
            <a class="active" href="index.html">Home</a>
            <a href="index.html#news">News</a>
            <a href="contacto.html">Contact</a>
            <a href="ejercicio7texto.html">Ejercicio7</a>
            <a href="http://wikipedia.org">Wikipedia</a>
            <div class="dropdown">
                <button class="dropbtn">Dropdown
                    <i class="fa fa-caret-down"></i> <!-- flechita para abajo en el menu de selección-->
                </button>
                <div class="dropdown-content">
                    <a href="/#home">Home</a>
                    <a href="/#news">News</a>
                    <a href="/#others">Others</a>
                    <a href="https://wikipedia.org">Wikipedia</a>
                    <a href="/Ejercicios y pruebas/ejercicio2.html">Ejercicio - 2</a>
                    <a href="/Ejercicios y pruebas/ejercicio7texto.html">Ejercicio - 7</a>
                    <a href="/Ejercicios y pruebas/ejercicioZ.html">Ejercicio - Z</a>
                    <a href="/Ejercicios y pruebas/tabla10x10.html">Tabla 10x10</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">PHP
                    <i class="fa fa-caret-down"></i> <!-- flechita para abajo en el menu de selección-->
                </button>
                <div class="dropdown-content">
                    <a href="/form2/index2.php">Formulario 2</a>
                </div>
            </div>
            <div class="navbar-right">
                <a href="#search"><i class="fa-solid fa-magnifying-glass"></i>Search
                </a>
                <div style="display:inline-flex">
                    <a href="#about">About</a>
                </div>
            </div>
        </div>
        <div class="main">
            <?php


                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    if (!empty($_GET['edad'])) {
                        cosa($_GET['edad']);   
                    }else {
                        echo '<form class="formcenter indexmain" method="get" action="inicio.html" target="_self">
                        <div>
                            <h1>No hay un valor númerico en el formulario, vuelva al inicio.</h1>
                        </div>
                            <div class="btcenter">
                                <input class="bt" type="submit" value="Volver" />
                            </div>
                        </form>';
                    }
                }
                function cosa($edad){
                    if ($edad < 0 || $edad > 200) {
                        echo '
                        <form class="formcenter indexmain" method="get" action="form_edad.html" target="_self">
                            <div>
                                <h1>No hay un valor númerico en el formulario, vuelva al inicio.</h1>
                            </div>
                                <div class="btcenter">
                                    <input class="bt" type="submit" value="Volver" />
                                </div>
                        </form>';
                    } elseif ($edad > 0 & $edad < 16) {
                        echo '<div><h1>Menor de edad: ' . $edad . '</h1></div>';
                    } elseif ($edad >= 16 & $edad < 18) {
                        echo '<div><h1>Menor de edad con derechos: ' . $edad . '</h1></div>';
                    } elseif ($edad >= 18) {
                        echo '<div><h1>Mayor de edad: ' . $edad . '</h1></div>';
                    } else {
                        echo '
                        <form class="formcenter indexmain" method="get" action="inicio.html" target="_self">
                            <div>
                                <h1>No hay un valor númerico en el formulario, vuelva al inicio.</h1>
                            </div>
                                <div class="btcenter">
                                    <input class="bt" type="submit" value="Volver" />
                                </div>
                        </form>';
                    }      
                }
                ?>
            </div> 
        </div>
    </body>

</html>