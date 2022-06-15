<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Plantilla códigos</title>
    <meta name="author" content="Erik Aguirre">
    <meta name="description" content="código curso IFCD0110">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://img.icons8.com/nolan/344/sugarcane.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $abc = array();


    echo 'Abecedario: ';
    foreach (range('a', 'z') as $letra) {
        array_push($abc, $letra);
        echo $letra; //letras
    }

    echo '<br />';
    $a = count($abc); // cuenta numero de objetos en el array
    echo 'Número de letras: ' . $a;

    echo '<br />';
    echo '<br />';

    print_r($abc); //printear array

    echo '<br />';
    echo '<br />';

    echo 'Lista ordenada normal: ';

    echo '<ul>';

    for ($b = 0; $b < $a; $b++) {
        echo '<li>' . $abc[$b] . '</li>';
    }
    echo '</ul>';

    echo '<br />';
    echo '<br />';

    echo 'Lista desordenada : ';

    echo '<ul>';
    $bc = '';
    for ($b = 0; $b < $a; $b++) {
        $bc = $bc  . $abc[$b];
        echo '<li>' . $bc . '</li>';
    }
    echo '</ul>';

    echo '<br />';
    echo '<br />';

    echo 'Lista desordenada al revés: ';

    echo '<ul>';
    $cd = '';
    $a = $a - 1;
    for ($b = $a; $b >= 0; $b--) {
        $cd = $cd  . $abc[$b];
        echo '<li>' . $cd . '</li>';
    }
    echo '</ul>';

    echo '<br />';
    echo '<br />';
    ?>
</body>

</html>