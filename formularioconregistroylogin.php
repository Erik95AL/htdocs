<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Profe" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="./style.css" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            $("#includedContent").load("/menu/menu.html");
        });
    </script>
    <style>
        .center {
            margin: auto;
            margin-top: 20px;
            width: 50%;
            text-align: center;
            border: 2px black solid;
            min-width: min-content;
        }

        form input {
            margin: 20px;
        }
    </style>
</head>

<body>
    <div id="includedContent"></div>
    <div class="main">
        <form action="./receptor.php" method="get" target="_blank">
            <fieldset>
                <legend>Titulo del form</legend>
                <div class="center">
                    <label>Guardar</label>
                    <input type="radio" name="saveornot" value="true" onclick="document.getElementById('nameUser').disabled=false;document.getElementById('ocultar').style.display = 'block';" />
                    <label>Login</label>
                    <input type="radio" name="saveornot" value="false" onclick="document.getElementById('nameUser').disabled=true;document.getElementById('ocultar').style.display='none';" />
                </div>
                <div class="center" id="ocultar">
                    <label>Name user:</label>
                    <input type="text" name="nameUser" id="nameUser" placeholder="name user" />
                </div>
                <div class="center">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 4}$" required />
                </div>
                <div class="center">
                    <label>Password:</label>
                    <input type="password" name="password" required />
                </div>

                <div class="center">
                    <input type="submit" />
                </div>
            </fieldset>
        </form>
    </div>
</body>

</html>





#####################################################################
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Profe" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="./style.css" />
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            $("#includedContent").load("/menu/menu.html");
        });
    </script>
</head>

<body>
    <div id="includedContent"></div>

    <div class="main">
        <?php
        //definir token
        $token = 'mytoken';

        //checks
        $save = false;
        $error = true;
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            echo 'AAAAAAAAAAAAA';
            if (!empty($_GET['saveornot'])) {
                echo 'BBBBBBBBB';
                if ($_GET['saveornot'] == 'true') {
                    if (!empty($_GET['nameUser'])) {
                        $name = $_GET['nameUser'];
                    }
                    if (!empty($_GET['email'])) {
                        $email = $_GET['email'];
                    }
                    if (!empty($_GET['password'])) {
                        $password = $_GET['password'];
                    }
                    if (!empty($name) & !empty($email) & !empty($password)) {
                        $save = true;
                        $error = false;
                    }
                } else {
                    if (!empty($_GET['email'])) {
                        $email = $_GET['email'];
                    }
                    if (!empty($_GET['password'])) {
                        $password = $_GET['password'];
                    }
                    if (!empty($email) & !empty($password)) {
                        $error = false;
                    }
                }
            }
        }
        //save or not
        if (!$error) {
            if ($save) { //save
                echo '//$save=true';
                $date = date('Y.m.d');
                //
                $usuarios = new SimpleXMLElement('db.xml', 0, true);
                $nuevoUsuario = $usuarios->addChild('user');
                $nuevoUsuario->addChild('name', $name);
                $nuevoUsuario->addChild('email', encrypt($email, $token, $date));
                $nuevoUsuario->addChild('password', encrypt($password, $token, $date));
                $nuevoUsuario->addChild('date', $date);
                $usuarios->saveXML('db.xml');
                echo 'Usuario guardado';
            } else { //not save
                echo '//$save=false';
                if (!$xml = simplexml_load_file('db.xml')) {
                    echo "No se ha podido cargar el archivo";
                } else {
                    $emailok = false;
                    $response = 'Usuario no encontrado';
                    foreach ($xml as $user) {
                        $datexml = $user->date;

                        if ($user->email == encrypt($email, $token, $datexml)) {
                            if ($user->password == encrypt($password, $token, $datexml)) {
                                $response = 'Bienvenido: ' . $user->name;
                                break;
                            } else {
                                $response = 'La cotrase??a no coincide';
                                break;
                            }
                        }
                    }
                    echo '<br /><br /><br /><br />';
                    echo '<h1>' . $response . '</h1>';
                    echo '<br /><br /><br /><br />';
                }
            }
        } else {
            echo '<br /><br /><br /><br />';
            echo '<h1>Error ocurred</h1>';
            echo '<br /><br /><br /><br />';
        }
        ?>
    </div>
</body>
<?php
function encrypt($txt, $token1, $t)
{
    $tokenizer = $token1 . $txt . $t;
    $hash = hash('gost', $tokenizer, false);
    return $hash;
}
?>

</html>