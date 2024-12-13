<div class='titulo'>Desafio de impressao</div>
<!-- Enunciado :
 -Imprima apenas os valores do array que contém indice par
 -resolver com for o foreach-->

<?php
    $array =[
        "AAA",
        "BBB",
        "CCC",
        "DDD",
        "EEE",
        "FFF"
    ];
    for($i = 0; $i < count($array); $i++){
        if($i % 2 === 1) continue;
        echo "{$array[$i]} <br>";
    }

    foreach($array as $chave => $valor){
        if($chave % 2 !== 0)continue;
        echo "$valor <br>";
    }