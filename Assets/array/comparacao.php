<div class='titulo'>Comparação de Arrays</div>


<?php
    $array1 =['nome'=> 'Maria','idade' =>20];
    $array2 =['nome'=> 'Maria','idade' =>20];

    var_dump($array1 == $array2);
    echo '<br>';
    var_dump($array1 === $array2);
    echo '<br>';
    $array3 = ['idade' => 20, 'nome' => 'Maria'];
    var_dump($array1 == $array3);
    echo '<br>';
    var_dump($array1 === $array3);
    $array4 = ['idade' => "20", 'nome' => 'Maria'];
    echo '<br>';
    echo '<br>';
    var_dump($array1 == $array4);

