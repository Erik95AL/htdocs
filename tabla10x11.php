<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Plantilla códigos</title>
        <meta name="author" content="Erik Aguirre">
        <meta name="description" content="código curso IFCD0110">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="stylesheet" href="styles_tablas.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
        <link rel="stylesheet" href="paginaselect.css">
        <style>
            table, th, td {
                border: 1px solid black;
                text-align:center;
                font-family: 'Times New Roman', Times, serif;
                border-collapse:collapse;
            }
            table{
	            width: 100%;
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
    <body>
        <table>
            <caption>Tabla 10x11</caption>
                
                    <?php 
                        $tr='<tr>';
                        $tr2='</tr>';
                        $td='<td ';
                        $td2='</td>';
                        $cierre='>';
                        $guion=' - ';
                        $colorb='class="colorinchis_blue"';
                        $colorg='class="colorinchis_green"';
                        
                        for($colum=10;$colum>=0;$colum--) {
                            echo $tr;
                                for($fila=10;$fila>=0;$fila--) {
                                    //echo "<td>$colum - $fila</td>"; es lo mismo una que otra. pero el coste de procesamiento es un poco mayor.
                                            echo $td;
                                    if($colum%2==0&$fila%2==0){ //&AND ||OR 
                                            echo $colorb; /*echo 'texto' .variable. 'texto' .variable.'texto'*/

                                    }else if($colum%3==0&$fila%3==0){ 
                                            echo $colorg;
                                    } 
                                            echo $cierre.$colum.$guion.$fila.$td2;
                                }
                                //módulo 2 -- par ### módulo 3 -- impar
                                echo $tr2;
                        }
                    ?>
                               
        </table>
    </body>
</html>