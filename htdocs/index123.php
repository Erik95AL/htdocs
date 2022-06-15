<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Servidor prueba</title>
        <meta name="author" content="Erik Aguirre">
        <meta name="description" content="código curso IFCD0110">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="C:\Users\Desarrollo\Desktop\styles.css">
    </head>
    <body>
        <h1>¡Start!</h1>
            
                <?php
                /*
                    $a --- variable
                    $a=1; //INT 
                    $a1='2'; 
                    $a2='2.3'; //FLOAT 
                    $b='hola'; //STRING 
                    $c="hola";
                    echo $a+$a2;
                */
                /*
                    $num1=1;
                    $num2=1;
                    $num2=$num2+5;
                    $num2++; //$num2+1;
                    $num2++; //$num2+1;
                    echo $num2
                */

                /*
                echo'<ul>';
                    $num1=1;
                    $num2=1;
                    //while ($num2<=10) suma el valor una última vez cuando ha llegado a su meta
                    while ($num2<10) {
                        echo '<li>'.$num1+$num2++.'</li>';
                        //echo $num1+$num2++.'<br />';
                        //echo $num1+ ($num2++); //bucle
                        // echo $num1+ ($num2=$num2+1); bucle
                        //$num2=$num2+1; 2
                        //$num1=$num2; 2
                        //echo $num1+(++$num2); suma antes por los + 
                        //echo $num1+($num2++); suma después por los +
                    }
                echo '</ul>';
                echo '<p>Hola</p>';
                */

                echo '<ul>';
                    for ($i = 1; $i < 10; $i++) { 
                        if($i>4) { //si se cumple esta condición se cumple los siguiente que en este caso sería el <li>.$i.</li>
                         
                    
                //for ($i = 10; $i ==10; $i=$i+2) { mientras sea 10 se cumple, si es superior o es inferior a 10 no saldrá...
                //for ($i = 1; $i !=10; $i++) { mientras sea diferente a 10 en este caso
                //for ($i = 1; $i <=10; $i=$i+2) {
                //for ($i = 1; $i <10; $i++) {    
                //for ($i = 1; $i >10; $i++) {
                //for ($i = 40; $i >=35; $i--) {
                //for ($i = 40; $i >=35; $i-2) {
                    //echo$i


                        echo '<li>' .$i.'</li>';
                    }
                    
                }
                echo '</ul>';

                if("abc"!="abc"){
                    echo 'IF';
                }else if ("abc"=="crf") {
                    echo 'ELSE IF';
                }else if ("abc"!="crf") {
                    echo 'ELSE IF';
                }else {
                    echo "ELSE";
                }
                ?>
            
        <h1>¡Finish!</h1>
    </body>
</html>