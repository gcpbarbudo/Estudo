<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Operador de Atribuição</title>
    </head>
    <body>
    <?php

    $a = $_GET["p"];
    echo "O preço do produto é $a";
    $b = $_GET["d"];
    echo "<br/>O desconto que consigo dar é de $b";

    echo "<br/>O preço do produto vai sair por: ". $a %= $b;



    ?>
    </body>
</html>