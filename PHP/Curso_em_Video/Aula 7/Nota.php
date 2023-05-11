<!DOCTYPE html>
<head>
<title>Tu passarás?</title>
</head>
<html>
  <body>
    <?php
        $N1 = $_GET["N1"];
        $N2 = $_GET["N2"];
        $R = ($N1+$N2)/2;

        echo "A média entre a nota $N1 e a nota $N2 é $R";

        echo "baseado na média das notas informadas acima, o aluno foi " . ($R >= 6 ? "APROVADO" : "REPROVADO");
    ?>
  </body>
</html>