<div class="titulo">Include Once</div>
<?php
    ini_set('display_errors',1);
    include('include_once_arquivo.php');
    // include('include_once_arquivo.php');

    echo "Variável = '{$variavel}'.<br>";
    $variavel ='Variavel alterada';
    echo "Variável = '{$variavel}'.<br>";
    
    include('include_once_arquivo.php');
    echo "Variável = {$variavel}.<br>";
    $variavel = 'texte troca';
    echo "Variável = {$variavel}.<br>";

    include_once('include_once_arquivo.php');
    //include('include_once_arquivo.php');
    echo "Variável = '{$variavel}'.<br>";

    require_once('include_once_arquivo.php');
    