<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php

    $a = 12;
    $b = 13;
    $r = $_GET["r"];

    echo "O valor de a e b são respectivamente $a e $b </br>";

    $resul =  ($r == "s") ? $a+$b : $a*$b;   

    echo $resul;
    echo "<br>";
    echo "<br>";
    echo"----------------------------------------------";
    
    $d = 4;
    $e = "4";

    $resul = $d = $e ? "SIM" : "NÃO";
    echo "<br>";
    echo "<br>";
    echo $resul;
    echo "<br>";
    echo "Será mesmo?";
    echo "<br>";
    $resul = $d === $e ? "SIM" : "NÃO";
    echo $resul;

    ?>
  </body>
</html>