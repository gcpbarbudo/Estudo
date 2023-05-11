<!DOCTYPE html>
<head>
    <?php
        $txt = isset($_GET["t"])  ?$_GET["t"]  :"[TEXTO NÃO ENCONTRADO]";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"20pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#00000";
    ?>
<title>Hello Word!</title>
<style>
    span.texto {
        font-size: <?php echo $tam; ?>;
        color: <?php echo $cor; ?>;
    }
</style>
</head>
<html>
  <body>
    <?php
      echo "<span class='texto'>$txt</span>";
    ?>
  </body>
</html>