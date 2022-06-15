<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario por PHP</title>
    <meta name="author" content="Erik Aguirre">
    <meta name="description" content="código curso IFCD0110">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="#">
</head>

<body>
    <?php
    function cosa($x, $y)
    {
        echo 'juan';
        return $x + $y;
    }
    echo cosa(3, 1);
    echo '<br />';
    echo cosa(5, 1);
    ?>
    <br />
    <?php
    function cosa2($x, $y)
    {
        echo $x + $y;
    }
    cosa2(3, 1);
    echo '<br />';
    cosa2(5, 1);
    ?>
    <?php
    function cosa3($x, $y)
    {
        $var = $x + $y;
        if ($var == 3) {
            return 'pepito';
        } else {
            return $var;
        }
        return 'menganito';
    }
    echo cosa3(2, 1);
    echo '<br />';
    echo cosa3(5, 1);
    ?>
    <?php
    function juan()
    {
        echo 'pepe<br />';
    }
    juan();
    juan();
    juan();
    juan();
    ?>
    <?php
    $token = 'kljfio'; //TODOS
    $date = '22.03.28'; // Comprobación por línea (DB)
    function encrypt($txt, $token1, $t)
    {
        //$t= date('y.m.d');
        $tokenizer = $token1 . $txt . $t;
        $hash = hash('gost', $tokenizer, false);
        return $hash;
    }
    echo encrypt('miguel@gmail.com', $token, date('y.m.d')) . ' hola';
    echo '<br />';
    echo encrypt('miguel@gmail.com', $token, $date) . ' date';
    echo '<br />';
    echo encrypt('holo', $token, date('y.m.d')) . ' holo';
    ?>
    <?php
    $edad = 20;

    switch ($edad) { //es el mismo "formato" que utiliza el if(){}
        case 3:
            echo 'menos';
            break;
        case 4:
            echo 'medio';
            break;
        case 5:
            echo 'mayor';
            break;
        default:
            echo 'nope';
            break;
    }

    if (1) {
        echo '1';
    } elseif (2) {
        echo '2';
    } else {
        echo '3';
    }
    //###############################################//NO SE PUEDE REPETIR EL NOMBRE DE LA FUNCION, SI NO DA ERROR Y SE COLAPSARÍA...
    function cosa4($edad)
    {
        $guardado = '';
        if ($edad > 17) {
            $guardado = 'mayor de edad';
        } elseif ($edad > 0) {
            $guardado = 'menor de edad';
        } else {
            $guardado = 'número invalido';
        }
        return $guardado; //return 'X '; un getter básico...
    }

    function getter($algo)
    { //te devuelven lo que se le haya puesto
        return 'X ';
    }

    date(); //es lo mismo que un getter, pero para fecha, es decir que te devuelven la "fecha" que este puesta... :)

    function setter($algo)
    { //das algo para que te lo guarden
        $var1 = $algo;
    }
    setter(18);

    function getter($asd)
    { //te devuelven lo que se le haya puesto
        return $asd + 5;
    }
    assert(getter(2) == 8); //este assert dará error!
    //(getter($asd)==8)
    assert(getter(2) == 7); //este assert no dará nada, ya que como cumple correctamente, simplemente no te dará ningún tipo de error. :)


    assert(1 == 2); // sirve para probar y comprobar cosas.

    assert(cosa(17) == 'menor de edad'); //assert(cosa(17 es lo que haya en function y sustituye su valor para probarlo))
    assert(cosa(18) == 'mayor de edad');
    assert(cosa(-18) == 'número invalido');

    var_dump($var1) //te da más información sobre la variable
    ?>
</body>

</html>