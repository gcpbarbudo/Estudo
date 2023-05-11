<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Operador de Atribuição</title>
    </head>
    <body>
    <?php

        for($c = 1; $c <= 10; $c++) {
            echo $c." ";
        }
        echo "<br/>";

        for($i = 10; $i >= 1; $i-- ) {
            echo $i." ";
        }
        echo "<br/>";
        for($i = 1; $i <= 50; $i +=5){
            echo $i." ";
        }
        echo "<br/>";

        for($i=20; $i >=0; $i-=2){
            echo $i." ";
        }
    ?>
    </body>
</html>