<div class= "titulo">Opradores Relacionais<div>
<?php
    var_dump( 1==1);
    echo "<br>";
    var_dump( 1>1);
    echo "<br>";
    var_dump(1 >= 1);
    echo "<br>";
    var_dump(4 < 23);
    echo "<br>";
    var_dump(1 <= 7);
    echo "<br>";
    var_dump(1 != 1);
    echo "<br>";
    var_dump(111 !== '111');

    echo"<p> Relacionais ni IF/Else</p><hr>";
    $idade = 75;
    if($idade < 18){
        echo "Menor de Idade = $idade<br>";
    }else if($idade <= 65){
        echo "Adulto = $idade<br>";
    }else {
        echo "Terceira idade = $idade!";
    }
?>
<style> 
    p{
        margin-bottom:0px;
    }
    hr{
        margin-top:0px;
    }
</style>