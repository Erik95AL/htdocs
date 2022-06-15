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
            <div class="border">
                <div class="sep">
                    <p class="<?php if(! $save1) {echo 'red';}else {echo 'green';}?>">Name:<?php echo $name;?></p>
                <?php   
                    if(strlen($_POST['name'])<=2){
                    echo "Vuelva a intentarlo, mínimo 2 carácteres.";
                }
                ?>
                </div>     
                      
                <div class="sep">
                    <p class="<?php if(! $save2) {echo 'red';}else {echo 'green';}?>">Email:<?php echo $email;?></p>
                <?php
                    if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)){
                        echo "Este correo no es correcto.";
                    }
                ?>
                </div>
                
                <div class="sep">
                    <p class="<?php if(! $save3) {echo 'red';}else {echo 'green';}?>">Password:<?php echo $password;?></p>
                </div>
                    <br />
            </div>
            
            <div class="border4 center">
                <div >
                        <?php
                            if ($save1&$save2&$save3){
                                $usuarios = new SimpleXMLElement('db.xml', 0, true);
                                $nuevoUsuario = $usuarios->addChild('user');
                                $nuevoUsuario->addChild('name', $name);
                                $nuevoUsuario->addChild('email', $email);
                                $nuevoUsuario->addChild('password', $password);
                                $nuevoUsuario->addChild('time', time());
                                $usuarios->saveXML('db.xml');
                                unset($_POST['name']);
                                unset($_POST['email']);
                                unset($_POST['password']);
                                echo 'Se ha guardado en la base de datos'; 
                                echo '<br />'; 
                                echo '<br />'; 
                                echo '<form method="POST" action=".\tabla.php">
                                    <input class="bt1"  type="submit" value="Continuar">
                                    </form>';
                            }else{
                                echo 'No se ha guardado en la base de datos'; 
                                echo '<br />'; 
                                echo '<br />'; 
                                echo '<form method="POST" action=".\index.php">
                                    <input class="bt2" type="submit" value="Regresar">
                                    <input type="hidden" name="name" value="'.$name.'">
                                    <input type="hidden" name="email" value="'.$email.'">
                                    <input type="hidden" name="password" value="'.$password.'">
                                    </form>';
                            }
                        ?>   
                </div>
            </div>
    </body>
</html>