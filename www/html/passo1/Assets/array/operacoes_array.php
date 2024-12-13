<div class='titulo'>Operações com Array</div>

<?php
    $dados1 =[
        "nome" => "jose",
        "idade" => 28
    ];
    $dados2 = [
        "naturalidade" => "Fortaleza",
    ];
    $dadoscompletos = $dados1 + $dados2;
    print_r($dadoscompletos);
    echo '<br>' .is_array($dadoscompletos);

    echo '<br>';
    $indice = array_rand($dadoscompletos);
    echo $indice;
    echo '<br>';
    echo "{$dadoscompletos['idade']}";
    echo '<br>';
    echo " ${dadoscompletos['idade']}";
    echo '<br>';
    print_r($dadoscompletos);
    unset($dadoscompletos["naturalidade"]);
    echo '<br>';
    print_r($dadoscompletos);
    unset($dadoscompletos);
    echo '<br>';
    var_dump($dadoscompletos);

    $impares = [1,3,5,7,9];
    $pares = [0,2,4,6,8];
    $dec= [1.5,2.5,3.5,4.5,5.5,6.5,7.5,8.5,9.5];
    $a =$pares +$impares;
    $deciamis = ($pares + ($impares + $dec));
    echo '<br>';
    print_r ($a);
    echo '<br>';
    print_r($deciamis);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    sort($deciamis);
    print_r($deciamis);
