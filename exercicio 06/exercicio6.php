<?php
    $carro = [
        'rodas' => 4,
        'cor' => "roxo",
        'portas' => 4,
        "velocidade_max" => 300,
        "marca" => "bmw"
    ];

    $marca =  $carro["marca"];
    $velocidade_maxima = $carro["velocidade_max"];
    echo  "o carro  da marca $marca e atinge $velocidade_maxima K/H";
    print_r($carro);
?>