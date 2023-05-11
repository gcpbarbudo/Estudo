<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
      $nome = $_GET["nome"];
      $nasc = $_GET["nasc"];
      $idade = date("Y") - $nasc;
      echo "O nascimento do $nome foi no ano de $nasc <br/>";
 
    
        if ($idade >= 18) {
            $votar = "já pode votar";
            $dirigir = "já pode dirigir";
        }
        else {
            $votar = "não pode votar";
            $dirigir = "não pode dirigir";
        }

         echo " $nome, você possui $idade, então $votar, $dirigir";
    ?>
  </body>
</html>