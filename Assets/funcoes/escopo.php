<div class='titulo'>Função & Escopo</div>

<?php
    function imprimirMensagens(){
        echo "Olá! ";
        echo "Até a próxima!<br>";
    }
    imprimirMensagens();

    $variavel = 1;
    function trocavalor(){
        $variavel = 2;
        echo "Durante a função: $variavel <br>";
    }
    echo "Antes: $variavel <br>";
    trocavalor();
    echo "Depois: $variavel <br>";

    function trocavalorDeVerdade(){
        global $variavel;
        $variavel = 3;
        echo "Durante a função $variavel <br>";
    }
echo "Antes: $variavel <br>";
trocavalorDeVerdade();
echo "Depois: $variavel <br>";

//var_dump(trocavalorDeVerdade());

?>
