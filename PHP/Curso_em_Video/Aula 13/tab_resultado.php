<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Operador de Atribuição</title>
    </head>
    <body>
    <a href="javascript:history.go(-1)">Voltar</a> <br/>
    <?php
    $tab = $_GET["tab"];

    for($i = 1; $i <= 10; $i++) {
        $valor = $tab * $i;
        echo "$tab * $i = $valor <br/>";
    }
    ?>

    </body>
</html>