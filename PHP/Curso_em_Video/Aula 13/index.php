<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>Operador de Atribuição</title>
    </head>
    <body>
    <form method="get" action="tab_resultado.php">
    <select name="tab">
    <?php
        for($i = 1; $i <= 10;  $i++){
            echo "<option>$i</option>";
        }        
    ?>
    </select>
    <input type="submit" value="Enviar">

    </form>
    </body>
</html>