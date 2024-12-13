<div class= "Titulo">Variáveis</div>


<?php
    $numeroA =13;
    echo $numeroA,'<br>';
    var_dump($numeroA);
    echo '<br>';
    $a = 3;
    echo $a,'<br>';
    $b = 16;
    $soma = $a + $b;
    echo $soma,'<br>';
    echo isset($a);
    unset ($a);
    var_dump($a);
    //nomes de variável
    $var ='validade';
    echo '<br>', $var,'<br>';
    $var2 ='valida';
    echo $var2,'<br>';
    $var3 = 'vaida';
    echo $var3,'<br>';
    $_var_4 = 'valida';
    $vâr5 = 'valida';//evitar os acentos!
    echo '<br>';
    var_dump($_SERVER["HTTP_HOST"]);
?>