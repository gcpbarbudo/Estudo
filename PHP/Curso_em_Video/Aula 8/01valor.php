<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
      $valor = $_GET["v"];
      $rq = sqrt($valor); #Calculando a Raiz
      echo "A raiz quadrada de $valor é. " .number_format($rq,2);
    ?>
    <a href="formulario.php">Voltar</a>
  </body>
</html>