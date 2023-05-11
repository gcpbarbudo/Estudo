<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
      $nome = isset($_GET["nome"])?$_GET["nome"]:"[NÃO INFORMADO]";
      $ano = isset($_GET["ano"])?$_GET["ano"]:0;
      $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[NAO INFORMADO]";
      $idade = date("Y") - $ano;

      echo "$nome possui $idade anos e é do sexo $sexo"; 
    ?>
    <a href="02_exercicio.html">Voltar</a>
  </body>
</html>