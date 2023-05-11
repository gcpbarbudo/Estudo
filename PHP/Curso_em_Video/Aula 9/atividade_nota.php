<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
      $nome = $_GET["nome"];
      $n1 = $_GET["n1"];
      $n2 = $_GET["n2"];
      $r = ($n1+$n2)/2;
      
      if ($r < 6) {
        $valor = "REPROVADO";
      } 
      elseif (($r > 5) && ($r < 8)) {
        $valor = "RECUPERAÇÃO";

      } 
      else {
        $valor = "APROVADO";
      }
      echo "$nome, sua nota é $r, então você foi $valor";
    ?>
<a href = "atividade_nota.html" >Voltar</a>
  </body>
</html>