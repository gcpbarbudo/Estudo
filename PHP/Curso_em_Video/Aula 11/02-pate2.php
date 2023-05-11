<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>

    <form method="get" action="01-pate2.php">
      <?php
        $c = 1;
        while($c <= 5) {
        echo "Valor $c: <input type = 'number' name='v$c' max='100' min='0' value = '0' /> <br/>";
        $c++;
        }
      ?>
      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>