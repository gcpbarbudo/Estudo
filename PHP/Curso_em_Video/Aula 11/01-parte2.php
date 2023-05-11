<!DOCTYPE html>
<head>
<title>Hello Word!</title>
</head>
<html>
  <body>
    <?php
   $i = 1; //1º while pega os dados da url
   while($i<=5){
       $v = "num".$i;
       $url = "v".$i;
       $$v = isset($_GET[$url])?$_GET[$url]:0;
       $i++;
   }
       /*echo "$num1 $num2 $num3 $num4 $num5"; //assim fica inline*/

   $i=1; //este bloco mostra os dados pegos pela url
   while($i<=5){
   $v = "num".$i;
   echo "Valor $i: ". $$v ."<br/>";
   $i++;
}
?>      

        echo "$num1, $num2, $num3, $num4, $num5";
    ?>
  </body>
</html> 