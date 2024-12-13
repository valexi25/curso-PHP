<div class='titulo'>Argumentos & Retorno</div>

<?php
    function obterMensagens(){
        return 'Seja bem vindo(a)!';
    }
 
    echo obterMensagens();
    $m = obterMensagens();
    echo "<br> $m";

    function obterMensagensComNome($nome){
        return"Bem vindo, {$nome}";
    }
    echo'<br>',obterMensagensComNome('lucas');
    echo'<br>',obterMensagensComNome('pedro');

    function soma($a,$b){
        return $a + $b;
    }
    echo '<br>',soma(4,5);
    echo '<br>',soma(45,65);


    $x = 10;
    $y = 20;
    echo'<br>',soma($x,$y);

    function trocaValor($a,$valorNovo){
        $a = $valorNovo;
    }
    $variavel = 1; 
    trocaValor($variavel, 3);
    echo '<br>',$variavel;

    function trocaValorDeVerdade(&$a, $valorNovo){
        $a = $valorNovo;
    };
    trocaValorDeVerdade($variavel,5000);
    echo '<br>',$variavel;


?>