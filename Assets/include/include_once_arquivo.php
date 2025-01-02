<?php
    echo 'Carregando: include_once_arquivo<br>';
    $variavel = 'a variavel esta definida';

    if(!function_exists('soma')){
        function soma($a,$b){
            return $a + $b;
        }
    }