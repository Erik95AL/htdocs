<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Plantilla códigos</title>
    <meta name="author" content="Erik Aguirre">
    <meta name="description" content="código curso IFCD0110">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="#">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $name = '';
    $email = '';
    $password = '';
    $pais = '';
    $date = '';
    $lenguaje = '';
    $terms = '0';
    $ad = '0';
    $save1 = false;
    $save2 = false;
    $save3 = false;
    $save4 = false;
    $save5 = false;
    $save6 = false;
    $save7 = false;
    $save8 = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
            $save1 = true;
        }
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];
            $save2 = true;
        }
        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
            $save3 = true;
        }
        if (!empty($_POST['pais'])) {
            $pais = $_POST['pais'];
            $save4 = true;
        }
        if (!empty($_POST['date'])) {
            $date = $_POST['date'];
            $save5 = true;
        }
        if (!empty($_POST['lenguaje'])) {
            $lenguaje = $_POST['lenguaje'];
            $save6 = true;
        }
        if (!empty($_POST['terms'])) {
            $terms = 1;
            $save7 = true;
        }
        if (!empty($_POST['ad'])) {
            $ad = 1;
            $save8 = true;
        }
    }
    ?>
    <div class="border save savemain">
        <div class="sep">
            <p class="<?php if (!$save1) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Name: <?php echo $name; ?></p>
            <?php
            if (strlen($_POST['name']) <= 2) {
                echo "Vuelva a intentarlo, mínimo 2 carácteres.";
            }
            ?>
        </div>
        <div class="sep">
            <p class="<?php if (!$save2) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Email: <?php echo $email; ?></p>
            <?php
            if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
                echo "Este correo no es correcto.";
            }
            ?>
        </div>
        <div class="sep">
            <p class="<?php if (!$save3) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Password: <?php echo $password; ?></p>
        </div>
        <div class="sep">
            <p class="<?php if (!$save4) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">País: <?php echo $pais; ?>
        </div>
        <div class="sep">
            <p class="<?php if (!$save5) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Fecha de nacimiento: <?php echo $date; ?>
        </div>
        <div class="sep">
            <p class="colorinchis_green">Tiempo: <?php print_r($_POST['date']); ?>
        </div>
        <div class="sep">
            <p class="<?php if (!$save6) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Lenguaje preferente: <?php echo $lenguaje; ?>
        </div>
        <div class="sep">
            <p class="<?php if (!$save7) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Terminos y condiciones: <?php echo $terms; ?>
        </div>
        <div class="sep">
            <p class="<?php if (!$save8) {
                            echo 'colorinchis_red';
                        } else {
                            echo 'colorinchis_green';
                        } ?>">Anuncios personalizados: <?php echo $ad; ?>
        </div>
        <!--<div>
                    ?php print_r($_POST);?>
                        <br />
                        <br />
                    ?php print_r($_POST['date']);?>
                        <br />
                        <br />
                    ?php var_dump($_POST['date'])?>
                        <br />
                        <br />
                    ?php print_r(strtotime($_POST['date']))?>
                        <br />
                        <br />
                    ?php var_dump(strtotime($_POST['date']))?>
                </div>-->
    </div>
    <div class="border cajetin btcenter cajetincenter">
        <?php
        if ($save1 & $save2 & $save3 & $save4) {
            $usuarios = new SimpleXMLElement('db2.xml', 0, true);
            $nuevoUsuario = $usuarios->addChild('user');
            $nuevoUsuario->addChild('name', $name);
            $nuevoUsuario->addChild('email', $email);
            $nuevoUsuario->addChild('password', $password);
            $nuevoUsuario->addChild('pais', $pais);
            $nuevoUsuario->addChild('date', $date);
            $nuevoUsuario->addChild('lenguaje', $lenguaje);
            $nuevoUsuario->addChild('terms', $terms);
            $nuevoUsuario->addChild('ad', $ad);
            // $nuevoUsuario->addChild('time', strtotime($_POST['date']));
            $usuarios->saveXML('db2.xml');
            unset($_POST['name']);
            unset($_POST['email']);
            unset($_POST['password']);
            unset($_POST['pais']);
            unset($_POST['date']);
            unset($_POST['lenguaje']);
            unset($_POST['terms']);
            unset($_POST['ad']);
            echo 'Se ha guardado en la base de datos';
            echo '<br />';
            echo '<br />';
            echo '<form method="POST" action=".\tabla2.php">
                                    <input class="bt1 color"  type="submit" value="Continuar">
                                    </form>';
        } else {
            echo 'No se ha guardado en la base de datos';
            echo '<br />';
            echo '<br />';
            echo '<form method="POST" action=".\index2.php">
                                    <input class="bt2 color" type="submit" value="Regresar">
                                    <input type="hidden" name="name" value="' . $name . '">
                                    <input type="hidden" name="email" value="' . $email . '">
                                    <input type="hidden" name="password" value="' . $password . '">
                                    <input type="hidden" name="pais" value="' . $pais . '">
                                    <input type="hidden" name="date" value="' . $date . '">
                                    <input type="hidden" name="lenguaje" value="' . $lenguaje . '">
                                    <input type="hidden" name="terms" value="' . $terms . '">
                                    <input type="hidden" name="ad" value="' . $ad . '">
                                    </form>';
        }
        ?>
    </div>
</body>

</html>