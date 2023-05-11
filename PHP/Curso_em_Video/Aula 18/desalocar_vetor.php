<pre> <!--Organiza os vetores de vertical -->
    <?php
    $n = array(1,2,4,8,20,29); //declarando um array
    $n[] = 7; //declarando com [] ele aloca automaticamente no ultimo vetor
    unset($n[4]);
    print_r($n);
    ?>
    </pre>

<!-- NA TELA -->
    <!-- Array
(
    [0] => 1
    [1] => 2
    [2] => 4
    [3] => 8
    [5] => 29
    [6] => 7
)
     -->