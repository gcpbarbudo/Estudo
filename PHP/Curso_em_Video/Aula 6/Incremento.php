<!DOCTYPE html>
<head>
<title>Incremento - PHP</title>
</head>
<html>
  <body>
    <?php

      $ano = $_GET["aa"];
      echo "O ano atual é $ano e o ano que vem é ". ++$ano;

    ?>
  </body>
</html>