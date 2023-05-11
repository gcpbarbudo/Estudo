<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Operador de Atribuição</title>
    </head>
    <body>
    <?php
    function var_local (&$x) { //<- Aqui fica o &$x
        $x += 2;
        echo "dentro da função retornar $x <br/>";
        
    }

    $a = 3;
    var_local($a);
    echo "fora da função retorna $a <br/>";
    //Com &$x retorna 5
    //Sem $x retorna 3


    ?>
    </body>
</html>