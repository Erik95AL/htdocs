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
    <style>
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            opacity: 1;
        }

        form div {
            border: 2px solid red;
            margin: auto;
            width: 20%;
        }
    </style>
</head>

<body>
    <form method="post" action="./save2.php" target="_blank">
        <fieldset>
            <legend>Información personal</legend>
            <div>
                <p>Nombre completo: <input type="text" name="nombre"></p>
                <p>Dirección: <input type="password" name="direccion"></p>
                <p>Teléfono: <input type="tel" name="telefono"></p>
            </div>
            <br />
            <br />
            <div>
                <input type="text" cols="50" name="XXXX" placeholder="Prueba de placeholder" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" autocomplete="on" autofocus required>
                <br />
                <input type="text" cols="50" name="XXXX" placeholder="Prueba de placeholder 2" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" +[0-9]{2}-[0-9]{9} autocomplete="on" autofocus required>
            </div>
            <br />
            <div>
                <input type="url" cols="50" name="url" placeholder="Escribe la URL de tu página web personal.">
            </div>
            <br />
            <div>
                <input type="color" name="color" value="#858585">
            </div>
            <br />
            <div>
                <label for="">PIN:</label>
                <br />
                <input type="text" maxlength="4" name="XXXX">
            </div>
            <div>
                <label for="opcion">Opciones:</label>
                <label for="opcion1">1</label>
                <input type="radio" name="opcion" id="opcion1">

                <label for="opcion2">2</label>
                <input type="radio" name="opcion" id="opcion2">

                <label for="opcion3">3</label>
                <input type="radio" name="opcion" id="opcion3">

                <label for="opcion4">3</label>
                <input type="radio" name="opcion" id="opcion4">
            </div>
            <br />
            <br />
            <div>
                <input type="range" name="XXXX">
            </div>
            <br />
            <br />
            <div>
                <input type="file" name="XXXX">
            </div>
            <br />
            <br />
            <div>
                <input type="search" name="XXXX">
            </div>
            <br />
            <br />
            <div>
                <input type="time" name="XXXX">
            </div>
            <br />
            <br />
            <div>
                <input type="week" name="semana" value="2022-W20"> <!-- W20 indica el calendario americano y el 2022 indica el año que se mostrará primero.-->
                <input type="month" name="mes" value="2022-04">
                <input type="date" name="dia" value="2000-11-03">
            </div>
            <div>
                <input type="file" name="file" accept=".zip, .rar, .gif">
            </div>
            <br />
            <br />
            <div>
                <label for="">Número (min-10, max 10):</label>
                <br />
                <input type="number" name="number_control" min="-10" max="10" value="0" />
            </div>
            <!--se aplica el style comentado de abajo PARA PONER LAS FLECHAS DE SUBIR O BAJAR-->
            <!--<style>
                input[type="number"]::-webkit-inner-spin-button,
                input[type="number"]::-webkit-outer-spin-button {
                    opacity: 1;
                }
            </style>  Con este style las flechas (arriba, abajo) del selector de número, aparecen fijas nada más actualizar    -->
            <br />
            <br />
            <div>
                <textarea cols="30" rows="10"></textarea> <!-- cols= número de letras en columnas // rows= número de letras en línea -->
            </div>
            <br />
            <br />
            <div>
                <select name="selector" multiple>
                    <optgroup label="personas">
                        <option value="juan" selected>juan</option> <!-- <option selected -->
                        <option value="pedro">pedro</option>
                    </optgroup>
                    <optgroup label="objetos">
                        <option value="silla">silla</option>
                        <option value="mesa">mesa</option>
                    </optgroup>
                </select>
            </div>
            <br />
            <br />
            <div>
                <input type="submit" name="asd">
            </div>
            <br />
            <br />
        </fieldset>
    </form>
    <!--?php
                $name='';                    
                $email='';
                $password='';
                $pais='';   
                $date='';  
                $lenguaje='';
                $terms='';
                $ad='';            
                $save1=false;
                $save2=false;
                $save3=false;
                $save4=false;
                $save5=false;
                $save6=false;
                $save7=false;
                $save8=false;
                
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
                            if(! empty ($_POST['pais'])){
                                $pais = $_POST['pais'];
                                $save4=true;
                            }
                            if(! empty ($_POST['date'])){
                                $date = $_POST['date'];
                                $save5=true;
                            }
                            if(! empty ($_POST['lenguaje'])){
                                $pais = $_POST['lenguaje'];
                                $save6=true;
                            }
                            if(! empty ($_POST['terms'])){
                                $lenguaje = $_POST['terms'];
                                $save7=true;
                            }
                            if(! empty ($_POST['ad'])){
                                $ad = $_POST['ad'];
                                $save8=true;
                            }
                    }
            ?>
                <div class="border index indexmain">
                    <form method="post" action="./save2.php" target="_blank"> <-- después del action se puede poner la ruta directa o dejarlo así para que lo busque automaticamente -->
    <!-- <div class="formcenter">
                            <label class="input_text" for="Name">Name:</label>
                            <input type="text" name="name" class="input_text2" value="?php echo $name;?>" placeholder="Introduzca su nombre" >
                        </div>
                        <div class="formcenter">
                            <label class="input_text" for="Email">Email:</label>
                            <input type="text" name="email" class="input_text2" value="?php echo $email;?>" placeholder="Introduzca su email" >
                        </div>
                        <div class="formcenter">
                            <label class="input_text" for="Password">Password:</label>
                            <input type="password" name="password" class="input_text2" value="?php echo $password;?>" placeholder="Introduzca su contraseña">
                        </div>
                        <br />
                        <div class="formcenter btcenter">
                            <label for="pais"  value="?php echo $pais?>">País:</label>
                                <select name="pais" id="pais" >
                                    <option ?php if($pais=='SP'){echo 'select';} ?> value="España">España</option>
                                    <option ?php if($pais=='AND'){echo 'select';} ?> value="Andorra">Andorra</option>
                                    <option ?php if($pais=='FR'){echo 'select';} ?> value="Francia">Francia</option>
                                    <option ?php if($pais=='IT'){echo 'select';} ?> value="Italia">Italia</option>
                                    <option ?php if($pais=='OTH'){echo 'select';} ?> value="Otros">Otro</option>
                                    <option disabled value=""></option>
                                </select>
                        </div>
                        <div class="formcenter btcenter">   
                        <label  for="date">Edad:</label><br />
                            <input class="color" type="date" name="date" min="1970-01-01" max="2070-01-01" value="?php echo $date?>">   
                        </div>
                        <br />
                        <div class="formcenter btcenter">
                        <input class="color" type="radio" id="html" name="lenguaje" <php if($lenguaje=='HTML'){echo 'checked';}?> value="HTML" >
                            <pepe  for="html">HTML</pepe>
                        <input class="color" type="radio" id="css" name="lenguaje" <php if($lenguaje=='CSS'){echo 'checked';}?> value="CSS" >
                            <pepe  for="css">CSS</pepe>
                        <input class="color" type="radio" id="javascript" name="lenguaje" <php if($lenguaje=='JavaScript'){echo 'checked';}?> value="JavaScript" >
                            <pepe  for="javascript">JS</pepe>
                        <input class="color" type="radio" id="python" name="lenguaje" ?php if($lenguaje=='Phyton'){echo 'checked';}?> value="Phyton" >
                            <pepe  for="phyton">Phyton</pepe>
                        </div>
                        <br />
                        <div>
                        <input class="color" type="checkbox" id="terms" name="terms" value="1" >
                            <juan  for="terms">Aceptar terminos y condiciones</juan><br />
                        <input class="color" type="checkbox" id="ad" name="ad" value="1" checked>
                            <juan  for="ad">Anuncios personalizados.</juan>
                        </div>
                        <br />
                        <div class="btcenter">
                            <input class="bt color" type="submit">
                            <input class="bt color" type="reset" value="Reset">
                        </div>
                        <br />
                    </form>
                </div>      -->
</body>

</html>