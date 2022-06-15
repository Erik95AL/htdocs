<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Formulario por PHP</title>
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
    $terms = '';
    $ad = '';
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
            $pais = $_POST['lenguaje'];
            $save6 = true;
        }
        if (!empty($_POST['terms'])) {
            $lenguaje = $_POST['terms'];
            $save7 = true;
        }
        if (!empty($_POST['ad'])) {
            $ad = $_POST['ad'];
            $save8 = true;
        }
    }
    ?>
    <div class="border index indexmain">
        <form method="post" action="./save2.php">
            <!-- después del action se puede poner la ruta directa o dejarlo así para que lo busque automaticamente -->
            <div class="formcenter">
                <label class="input_text" for="Name">Name:</label>
                <input type="text" name="name" class="input_text2" value="<?php echo $name; ?>" placeholder="Introduzca su nombre">
            </div>
            <div class="formcenter">
                <label class="input_text" for="Email">Email:</label>
                <input type="text" name="email" class="input_text2" value="<?php echo $email; ?>" placeholder="Introduzca su email" required>
            </div>
            <div class="formcenter">
                <label class="input_text" for="Password">Password:</label>
                <input type="password" name="password" class="input_text2" value="<?php echo $password; ?>" placeholder="Introduzca su contraseña" required>
            </div>
            <br />
            <div class="formcenter btcenter">
                <label for="pais" value="<?php echo $pais ?>">País:</label>
                <select name="pais" id="pais" required>
                    <option <?php if ($pais == 'SP') {
                                echo 'select';
                            } ?> value="España">España</option>
                    <option <?php if ($pais == 'AND') {
                                echo 'select';
                            } ?> value="Andorra">Andorra</option>
                    <option <?php if ($pais == 'FR') {
                                echo 'select';
                            } ?> value="Francia">Francia</option>
                    <option <?php if ($pais == 'IT') {
                                echo 'select';
                            } ?> value="Italia">Italia</option>
                    <option <?php if ($pais == 'OTH') {
                                echo 'select';
                            } ?> value="Otros">Otro</option>
                    <option disabled value=""></option>
                </select>
            </div>
            <div class="formcenter btcenter">
                <label for="date">Edad:</label><br />
                <input class="color" type="date" name="date" min="1970-01-01" max="2070-01-01" value="<?php echo $date ?>">
            </div>
            <br />
            <div class="formcenter btcenter">
                <input class="color" type="radio" id="html" name="lenguaje" <?php if ($lenguaje == 'HTML') {
                                                                                echo 'checked';
                                                                            } ?> value="HTML">
                <pepe for="html">HTML</pepe>
                <input class="color" type="radio" id="css" name="lenguaje" <?php if ($lenguaje == 'CSS') {
                                                                                echo 'checked';
                                                                            } ?> value="CSS">
                <pepe for="css">CSS</pepe>
                <input class="color" type="radio" id="javascript" name="lenguaje" <?php if ($lenguaje == 'JavaScript') {
                                                                                        echo 'checked';
                                                                                    } ?> value="JavaScript">
                <pepe for="javascript">JS</pepe>
                <input class="color" type="radio" id="python" name="lenguaje" <?php if ($lenguaje == 'Phyton') {
                                                                                    echo 'checked';
                                                                                } ?> value="Phyton">
                <pepe for="phyton">Phyton</pepe>
            </div>
            <br />
            <div>
                <input class="color" type="checkbox" id="terms" name="terms" value="1" required>
                <juan for="terms">Aceptar terminos y condiciones</juan><br />
                <input class="color" type="checkbox" id="ad" name="ad" value="1" checked>
                <juan for="ad">Anuncios personalizados.</juan>
            </div>
            <br />
            <div class="btcenter">
                <input class="bt color" type="submit">
                <input class="bt color" type="reset" value="Reset">
            </div>
            <br />
        </form>
    </div>
</body>

</html>