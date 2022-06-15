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
    <div class="formcenter indexmain border">
        <div>
            <?php if ($_SERVER["REQUEST_METHOD"] == "GET") {
                if (!empty($_GET['num1'])) {
                    if (!empty($_GET['num2'])) {
                        $num1 = $_GET['num1'];
                        $num2 = $_GET['num2'];
                        if (!is_numeric($num1) || !is_numeric($num2)) {
                            echo '<div class="formcenter btcenter">Introducir un valor númerico.</div>';
                        } else {
                            if ($num1 > $num2) {
                                echo '<div class="formcenter btcenter">
                                        El número ' . $num1 . ' es mayor que ' . $num2 . ' y su resulado es = ' . intval($num1 / $num2) . '
                                    </div><br />';
                                echo '<div class="btcenter">' . $num1 . '/' . $num2 . '=' . intval($num1 / $num2) . '</div>';
                            } elseif ($num2 > $num1) {
                                echo '<div class="formcenter">
                                <p class="btcenter">El número ' . $num1 . ' es menor que ' . $num2 . ' y su resulado es = ' . intval($num2 / $num1) . '
                                </p></div><br />';
                                echo '<div class="btcenter">' . $num2 . '/' . $num1 . '=' . intval($num2 / $num1) . '</div>';
                            } elseif ($num1 == $num2) {
                                echo '<p class="btcenter">Los numeros son iguales por lo tanto su resultado es ' . intval($num1 / $num2) . '</p>';
                            } else {
                                echo '<p class="btcenter">Hay un error en los datos.</p>';
                            }
                        }
                    }
                }
            }
            ?>
        </div>
        <form method="get" action="inicio.html" target="_self">
            <div>
                <p></p>
            </div>
            <div class="btcenter ">
                <input class=" bt color" type="submit" value="Volver" />
            </div>
        </form>
    </div>
</body>

</html>