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
                $name='';                    
                $email='';
                $password='';                 
                $save1=false;
                $save2=false;
                $save3=false;
                
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {                            
                            if(! empty ($_POST['name'])){
                                $name = $_POST['name'];
                                $save1=true;                               
                            }
                            if(! empty ($_POST['email'])){
                                $email = $_POST['email'];
                                $save2=true;
                            }
                            if(! empty ($_POST['password'])){
                                $password = $_POST['password'];
                                $save3=true;
                            }
                    }
            ?>
                <div class="border3 center3">
                    <form method="post" action="./save.php"> <!-- después del action se puede poner la ruta directa o dejarlo así para que lo busque automaticamente -->
                        <div class="center3">
                            <label for="Name">Name:</label>
                            <input type="text" name="name" class="input_text2" value="<?php echo $name;?>" placeholder="Introduzca su nombre" >
                        </div>
                        <div class="center3">
                            <label for="Email">Email:</label>
                            <input type="text" name="email" class="input_text2" value="<?php echo $email;?>" placeholder="Introduzca su email" >
                        </div>
                        <div class="center3">
                            <label for="Password">Password:</label>
                            <input type="password" name="password" class="input_text2" value="<?php echo $password;?>" placeholder="Introduzca su contraseña">
                        </div>
                        <div class="center">
                            <input class="bt" type="submit">
                        </div>
                        <br />
                    </form>
        </body>
</html>