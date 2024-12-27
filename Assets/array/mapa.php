<div class='titulo'>Mapa</div>

<?php
    $dados = array(
        "idade" => 25,
        "cor" => 'verde',
        "peso" => 75.5
    );
     print_r($dados);
    echo '<br>' . $dados["idade"];
    echo '<br>' . $dados["cor"];
    echo '<br>' . $dados["peso"];
    echo '<br>' . $dados["outra_informacao"];
    
    $a = array(
        "a",
        "cinco" => "b",
        "c",
        8 => "d"
    );

   print_r($a);
    $a[] = 'i';
    echo '<br>';
    print_r($dados);
    echo '<br>';
    print_r($a);
    



