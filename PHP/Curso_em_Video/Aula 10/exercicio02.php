<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
    $d = $_GET["ds"];
    switch ($d) {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "Levanta e vai estudar :D";
            break;
        case 7:
        case 8:
            echo "Descanse jovem padawan!";
            break;
        default:
            echo "Dia da semana inválido";

    }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a> 
  </body>
</html>