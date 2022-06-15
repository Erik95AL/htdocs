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
        </style>
    </head>
    <body class="center2">
            <div class="border">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"> <!-- después del action se puede poner la ruta directa o dejarlo así para que lo busque automaticamente -->
                    <div class="center">
                        <label for="Name">Name:</label>
                        <input type="text" name="name" class="input_text">
                    </div>
                    <div class="center">
                        <label for="fname">F.Name:</label>
                        <input type="text" name="fname" class="input_text">
                    </div>
                    <div class="center">
                        <label for="Email">Email:</label>
                        <input type="text" name="email" class="input_text">
                    </div>
                    <div class="center">
                        <label for="Password">Password:</label>
                        <input type="password" name="password" class="input_text">
                    </div>
                    <div class="center">
                        <input type="submit">
                    </div>
                   <br />
                </form>
            </div>
                <?php
                    $name='';
                    $fname='';
                    $email='';
                    $password='';
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                // collect value of input field
                                if(! empty ($_POST['name'])){
                                    $name = $_POST['name'];
                                    //echo $name.'<br />';
                                }
                                if(! empty ($_POST['fname'])){
                                    $fname = $_POST['fname'];
                                    //echo $name.'<br />';

                                }
                                if(! empty ($_POST['email'])){
                                    $email = $_POST['email'];
                                    //echo $name.'<br />';
                                    
                                }
                                if(! empty ($_POST['password'])){
                                    $password = $_POST['password'];
                                    //echo $name.'<br />';
                                }
                        }
                ?>
                
            
            <div class="border">
                <div class="asd">
                    <p>Name:<?php echo $name;?></p>
                </div>
                <div class="asd">
                    <p>F.Name:<?php echo $fname;?></p>
                </div>
                <div class="asd">
                    <p>Email:<?php echo $email;?></p>
                </div>
                <div class="asd">
                    <p>Password:<?php echo $password;?></p>
                </div>
                    <br />
                <?php print_r($_POST); ?> <!--imprime cosas-->
            </div>
            <!--?php         (son las dos)
                    $name='';
                    $fname='';
                    $email='';
                    $password='';

                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            if(! empty ($_GET['name'])){
                                $name = $_GET['name'];
                                //echo $name.'<br />';
                            }
                            if(! empty ($_GET['fname'])){
                                $fname = $_GET['fname'];
                                //echo $name.'<br />';

                            }if(! empty ($_GET['email'])){
                                $email = $_GET['email'];
                                //echo $name.'<br />';
                                
                            }if(! empty ($_GET['password'])){
                                $password = $_GET['password'];
                                //echo $name.'<br />';
                            }
                        }
                ?
            ?php
                /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                    $name = $_POST['fname'];
                        if (empty($name)) {
                                echo "Password is empty";
                            } else {
                                echo $name;
                    }
                    $name = $_POST['fname'];
                    if (empty($name)) {
                            echo "/ FName is empty ";
                        } else {
                            echo $name.'<br />'; 
                    }
                    $name = $_POST['email'];
                    if (empty($name)) {
                            echo "/ Email is empty ";
                        } else {
                            echo $name.'<br />'; 
                    }
                    $name = $_POST['password'];
                    if (empty($name)) {
                            echo "/ Password is empty ";
                        } else {
                            echo $name.'<br />'; 
                    }
                }
            ? -->

    </body>
</html>