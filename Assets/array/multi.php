<div class='titulo'>Multidimensionais</div>

<?php
    $dados =[ 
        1 => [
            "nome" => "roberto",
            "idade" => ' 26',
            "naturalidade" => "São Paulo"
        ],
        [
            "nome" => "Maria",
            "idade" => 25,
            "naturalidade" => "Bahia"
        ],
    ]; 
    print_r($dados);   
    echo '<br>';
    print_r($dados[0]['idade']);
    echo '<br>';
    $dados[] = [
        "nome" => "florinda",
        "idade" => 30,
        "naturalidade" => "cidade do méxico"
    ];
    echo '<br>';
    echo '<br>';
    print_r($dados);
    echo '<br>';
    echo '<br>';
    $dados[[2][1]]["vizinho"] = "chaves";
    echo '<br>';
    print_r($dados);

   // unset($dados[1]);
    echo'<br>';
    echo'<br>';
    print_r($dados);

    echo'<br>';
    echo'<br>';
