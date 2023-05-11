<pre>
<?php
    $matriz = array( array(6,4),
                    array(4,0),
                    array(9,5));
    $matriz[0][1] = $matriz[2][0]; //Posicionamento do array
    print_r($matriz);

?>
</pre>

<!-- Array
(
    [0] => Array
        (
            [0] => 6
            [1] => 9
        )

    [1] => Array
        (
            [0] => 4
            [1] => 0
        )

    [2] => Array
        (
            [0] => 9
            [1] => 5
        )

) -->

