
<?php
    echo 'Carregando: include_arquivo<br>';
    $variavel = 'a variaval Esta definida';

    if(!function_exists('soma')){
        function soma($a,$b){
          return $a + $b;
        }
    } 