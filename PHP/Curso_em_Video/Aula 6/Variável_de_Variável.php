<!DOCTYPE html>
<head>
<title>Aula 6 - Variável de Variável</title>
</head>
<html>
  <body>
    <?php

    /*A variável de variável
    A variável criada com $$ pode ser o nome da variável com $*/
      $bolacha = "recheada";
      $$bolacha = "morango";

      echo "a bolacha $bolacha é de $recheada";
    ?>
  </body>
</html>