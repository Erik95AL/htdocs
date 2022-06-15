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
    <link rel="stylesheet" href="table2.css">
</head>

<body>
    <h1 class="btcenter">Registro de usuarios</h1>
    <div class="tablemain">
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>País</th>
                    <th>Fecha</th>
                    <th>Idioma preferente</th>
                    <th>Terms y cond.</th>
                    <th>Publi pers.</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (!$xml = simplexml_load_file('db2.xml')) {
                } else {
                    foreach ($xml as $user) {
                        echo '<tr>';
                        echo '<td>' . $user->name . '</td>';
                        echo '<td>' . $user->email . '</td>';
                        echo '<td>' . $user->password . '</td>';
                        echo '<td>' . $user->pais . '</td>';
                        echo '<td>' . $user->date . '</td>';
                        echo '<td>' . $user->lenguaje . '</td>';
                        echo '<td>' . $user->terms . '</td>';
                        echo '<td>' . $user->ad . '</td>';
                        echo '</tr>';
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="border cajetin btcenter cajetincenter">

        <form method="POST" action=".\index2.php">
            <input class="bt color" type="submit" value="Inicio">
        </form>

    </div>
</body>

</html>