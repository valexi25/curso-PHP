<div class="titulo">Valor VS Referência</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel;
    //atribuição por valor
    $variavelValor = $variavel;
    echo"<br> $variavelValor";
    $variavelValor = 'Novo valor';
    echo "<br> $variavel";
    echo "<br> $variavelValor";

    //atribuição por referencia
     $variavelReferencia = & $variavel;
    echo "<br> $variavel";
    echo "<br> $variavelReferencia";
    $variavelReferencia = 'Mesma referencia';
    echo "<br> $variavel";
    echo "<br> $variavelReferencia";
?>