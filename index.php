<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semana 7 - Sentencias</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="jumbotron text-center">
    <h1>Semana 7 Trabajando con Sentencias</h1>
    <p>En esta semana programaremos ejemplos con If simple, compuesto, anidado; Switch, Ciclo for y Ciclo while.</p>
    </div>

    <div class="container">
        <h2>Declaraciones condicionales de PHP</h2>
        <pre>Muy a menudo, cuando escribe código, desea realizar diferentes acciones para diferentes condiciones.
        Puede usar declaraciones condicionales en su código para hacer esto.
        En PHP tenemos las siguientes declaraciones condicionales:
        + if declaración: ejecuta algún código si una condición es verdadera
        + if...else declaración: ejecuta un código si una condición es verdadera y otro código si esa condición es falsa
        + if...elseif...else declaración: ejecuta códigos diferentes para más de dos condiciones
        + switch declaración: selecciona uno de los muchos bloques de código que se ejecutarán
        </pre>

        <h3>Ejemplo 1 If Simple</h3>
        <p>El simple cuestiona el valor de una variable para ejecurar un proceso. Nota Solo cuestiona 1 vez y solo realiza 1 proceso.</p>
        <p>En este ejemplo se uso una variable con un valor inicial de 10 y se cuestiono si esta valia 10 de ser asi mostrara un texto.</p>
        <?php
            $numero = 10;
            if($numero == 10){
                echo '+ La variable numero vale 10';
            }
        ?>
        <h3>Ejemplo 2 If compuesto</h3>
        <p>El compuesto cuestiona el valor de una variable para ejecurar un proceso cuando este es verdadero o falso. Nota Solo cuestiona 1 vez y realiza 2 procesos.</p>
        <p>En este ejemplo se uso una variable con un valor inicial de 10 y se cuestiono si esta valia 10 de ser asi mostrara un texto vale 10 de lo contrario un texto no vale 10.</p>
        <?php
            $numero = 100;
            if($numero == 10){
                echo '+ La variable numero vale 10';
            }
            else{
                echo '+ La variable numero no vale 10';
            }
        ?>
        <h3>Ejemplo 3 If anidado</h3>
        <p>El anidado se emplea cuando requierimos de un proceso que tenga mas de un cuestionamiento o que su resultado sea nuevamente custionado.</p>
        <p>En este se analiza si una variable tiene un valor que se unidad, decena, centena o ninguna de ellas.</p>
        <?php
            $numero = 1000;
            if($numero >= 1){
                if($numero <= 9){
                    echo 'La variable numero es una unidad';
                }
                else{
                    if($numero <= 99){
                        echo 'La variable numero es una decena';
                    }
                    else{
                        if($numero <= 999){
                            echo 'La variable numero es una centena';
                        }
                        else{
                            echo 'La variable numero no es una unidad, decena o centena';
                        }
                    }
                }
            }
            else{
                echo 'La variable numero no es una unidad, decena o centena';
            }
            
            echo '<br/>';

            if($numero >= 1 and $numero <= 9){
                echo 'La variable numero es una unidad';
            }
            else{
                if($numero >= 10 and $numero <= 99){
                    echo 'La variable numero es una decena';
                }
                else{
                    if($numero >= 100 and $numero <= 999){
                        echo 'La variable numero es una centena';
                    }
                    else{
                        echo 'La variable numero no es una unidad, decena o centena';
                    }
                }
            }
        ?>
        <br/>
        <h3>Ejemplo 4 Switch</h3>
        <p>El switch es una sentencia de seleccion multiple donde una serie de posibles resultados cuestionan el valor de una variable</p>
        <p>Vamos a poner como ejemplo las seleccion de 4 posibles valores.</p>
        <?php
            $opcion = 40;
            switch($opcion){
                case 1:
                    echo 'Esta es la opcion 1';
                break;
                case 2:
                    echo 'Esta es la opcion 2';
                break;
                case 3:
                    echo 'Esta es la opcion 3';
                break;
                case 4:
                    echo 'Esta es la opcion 4';
                break;
                default:
                    echo 'Esa opcion no existe';
                break;
            }
        ?>

    </div>
</body>
</html>