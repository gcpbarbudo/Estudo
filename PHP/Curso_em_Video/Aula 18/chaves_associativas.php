<pre>
<?php
    $cad = array( "nome" => "Guilherme",
                  "idade" => 24        
                );
    $cad["fuma"] = false;
    print_r($cad);
    // NA TELA
    //     Array
    //     (
    //     [nome] => Guilherme
    //     [idade] => 24
    //     [fuma] => 
    //     )
    echo "<br/>";
    foreach($cad as $campo => $valor){
        echo "$campo: $valor " ;
        // NA TELA: nome: Guilherme idade: 24 fuma:  
    }
?>
</pre>

