<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
      $date = $_GET["date"];
      $nasc = $_GET["nasc"];
      $idade = $date - $nasc;
      
      echo  "Quem nasceu em $nasc tem $idade anos";
      $tipo = ($idade>=18 && $idade<65) ? "OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
      echo "dessa forma, seu voto é $tipo";
    ?>
  </body>
</html>