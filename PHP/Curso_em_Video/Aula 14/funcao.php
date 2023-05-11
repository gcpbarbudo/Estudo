<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Operador de Atribuição</title>
    </head>
    <body>
    <?php
        function mult_variaveis () {
            $valores = func_get_args(); //Cria vários vetores de acordo com a quantidade necessária
            $quant_valores = func_num_args (); //Retorna o número de argumentos que foi passado
            //Cria o for para somar várias vezes, e depois a $s recebe a soma do $p
                for($i=0; $i<$quant_valores; $i++) {
                    $soma += $valores[$i];
                }
            return $soma;
        }
        $resultado = mult_variaveis(1,2,3);
        echo "O resultado da soma de várias variáveis é: $resultado";
    ?>
    </body>
</html>