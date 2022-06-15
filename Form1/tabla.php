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
        <h1 class="cnt">Registro de usuarios</h1>
            <div >
                <table>
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Time</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(!$xml = simplexml_load_file('db.xml')){
                        
                    } else {
                        foreach ($xml as $user){
                            echo '<tr>';
                                echo '<td>'.$user->name.'</td>';
                                echo '<td>'.$user->email.'</td>';
                                echo '<td>'.$user->password.'</td>';
                                echo '<td>'.$user->time.'</td>';
                            echo '</tr>';
                            
                        }
                    }
                ?>
                    </tbody>
                </table>
            </div>
            <div class="border4 center4">
                
                    <form method="POST" action=".\index.php">
                        <input  class="bt"  type="submit" value="Inicio">
                    </form>
                
            </div>
    </body>
</html>