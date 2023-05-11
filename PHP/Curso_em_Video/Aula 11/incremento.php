<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
        $min = $_GET["inicio"];
        $max = $_GET["fim"];
        $inc = $_GET["incremento"];
        $loop = $min;


        if ($max > $min) {
            while($loop <= $max){
            echo $loop ."<br/>";
            $loop = $loop + $inc;
            }
        } else
            while($loop >= $max){
            echo $loop ."<br/>";
            $loop = $loop - $inc;
            }
    ?>
  </body>
</html>