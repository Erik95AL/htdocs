<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Plantilla códigos</title>
        <meta name="author" content="Erik Aguirre">
        <meta name="description" content="código curso IFCD0110">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
        <link rel="stylesheet" href="paginaselect.css">
        <style>
            .border{
                border: 1px solid black;
                background-color: gray;
                font-family: verdana;
                color: white;
                text-align: left;
                margin: 5%;
                padding: 50px;               
            }
            label{
                text-align:left;
                display:block;
                
            }
            .center{
                margin: auto;
                width:30%;
                padding: 10px;                
                text-align:center;
            }
            .center2{
                margin: auto;
            }
            .input_text{
                width:99%;
                height: 20px;
            }
            .asd{
                margin-left:20px;
            }
            table, th, td {
                border: 1px solid black;
                text-align:center;
                font-family: 'Times New Roman', Times, serif;
                border-collapse:collapse;
                color: black;
            }
            table{
	            width: 100%;
                
            }
            th{
                background-color: purple;
            }
            td{
                background-color: royalblue;
            }
            th, td{
                padding: 15px;
                margin: 0px;
            }
            .colorinchis_blue{
                background-color:blue;
            }
            .colorinchis_green{
                background-color:green;
            }
        </style>
    </head>
    <body class="center2">
        <?php
            $name='';                    
            $email='';
            $password='';
            //$submit=false; 
            $save1=false;
            $save2=false;
            $save3=false;
            //$save4=true;
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        // collect value of input field
                        if(! empty ($_POST['name'])){
                            $name = $_POST['name'];
                            $save1=true;
                            //echo $name.'<br />';
                        }
                        if(! empty ($_POST['email'])){
                            $email = $_POST['email'];
                            $save2=true;
                            //echo $name.'<br />';
                            
                        }
                        if(! empty ($_POST['password'])){
                            $password = $_POST['password'];
                            $save3=true;
                            //echo $name.'<br />';
                        }
                        //if(! empty ($_POST['submit'])){
                            //$submit = $_POST['submit'];
                            //$save4=false;
                            //echo $name.'<br />';
                        //}
                        
                }
        ?>
            <div class="border">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- después del action se puede poner la ruta directa o dejarlo así para que lo busque automaticamente -->
                    <div class="center">
                        <label for="Name">Name:</label>
                        <input type="text" name="name" class="input_text" value="<?php echo $name;?>" >
                    </div>
                    <div class="center">
                        <label for="Email">Email:</label>
                        <input type="text" name="email" class="input_text" value="<?php echo $email;?>" >
                    </div>
                    <div class="center">
                        <label for="Password">Password:</label>
                        <input type="password" name="password" class="input_text" value="<?php echo $password;?>" >
                    </div>
                    <div class="center">
                        <input type="submit">
                    </div>
                   <br />
                </form>
            </div>
               <?php
               $save=false;
                if($save1&$save2&$save3/*&$save4*/){
                    $save=true;
                }else{
                    $name='';                    
                    $email='';
                    $password='';
                    //$submit=false;
                }
               ?> 
                
            
            <div class="border">
                <div class="asd">
                    <p>Name:<?php echo $name;?></p>
                </div>                
                <div class="asd">
                    <p>Email:<?php echo $email;?></p>
                </div>
                <div class="asd">
                    <p>Password:<?php echo $password;?></p>
                </div>
                    <br />
                <!--?php print_r($_POST); ?> imprime cosas-->
            </div>

            <?php
                if ($save1&$save2&$save3/*&$save4*/){
                    echo "OK";
                    $usuarios = new SimpleXMLElement('AñadidoexplicacionPHP.xml', 0, true);
                    $nuevoUsuario = $usuarios->addChild('user');
                    $nuevoUsuario->addChild('name', $name);
                    $nuevoUsuario->addChild('email', $email);
                    $nuevoUsuario->addChild('password', $password);
                    $nuevoUsuario->addChild('time', time());
                    //var_dump($usuarios->user[2]);
                    //var_dump($usuarios);
                    $usuarios->saveXML('AñadidoexplicacionPHP.xml');
                    unset($_POST['name']);
                    unset($_POST['email']);
                    unset($_POST['password']);
                    //unset($_POST['submit']);
                    header("location:".$_SERVER['PHP_SELF']);
                }
            ?>
            <div class=border>
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
                    if(!$xml = simplexml_load_file('AñadidoexplicacionPHP.xml')){
                        echo "No se ha podido cargar el archivo";
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
    </body>
</html>