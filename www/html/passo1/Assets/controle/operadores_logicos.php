<div class= "titulo">Operadores Logicos</div>

<?php
    echo "<br><p>F o V<p><hr>";
    var_dump(true);
    echo "<br>";
    var_dump(!true);
    echo "<br>";
    echo "<br><p>Tabela Verdade 'AND'(E)<p><hr>";
    var_dump(true && true);
    echo "<br>";
    var_dump(true && false);
    echo "<br>";
    var_dump(false && true);
    echo "<br>";
    var_dump(false && false);
    echo "<br>";
    var_dump(true && 3>2 && 7<= 7);
    echo "<br>";
    echo "'ADN' <br>";
    var_dump(true AND true);
    echo "<br>";
    var_dump(true AND false);
    echo "<br>";
    var_dump(false AND true);
    echo "<br>";
    var_dump(false AND false);
    echo "<br>";
    var_dump(true AND 3>2 AND 7<= 7);


    echo "<br><p>Tabela Verdade 'OR'(OU)<p><hr>";
    var_dump(true || true);
    echo "<br>";
    var_dump(true || false);
    echo "<br>";
    var_dump(false || true);
    echo "<br>";
    var_dump(false || false);
    echo "<br>";
    echo "'OR'<br>";
    var_dump(true or true);
    echo "<br>";
    var_dump(true or false);
    echo "<br>";
    var_dump(false or true);
    echo "<br>";
    var_dump(false or false);

    echo "<br><p>Tabela Verdade 'xOR'(OU Exclusivo) <p><hr>";
    var_dump(true xor true);
    var_dump(true xor true);
    var_dump(false xor true);
    var_dump(false xor false);

    echo "<br><p class='divisao'>Exemplo<p><hr>";
    $idade = 65;
    $sexo = 'F';

    if($idade >=60 && $sexo === 'F'){
        echo "Pode se aponsentar -> $sexo";
    }elseif($idade >= 65 && $sexo === 'M'){
        echo"Pode se aponsentar -> $sexo";
    }else{
        echo ' Vai ter que trabalhar mais um pouco...';
    }

;

?>
   
<style>
    p{
        margin-bottom: 0px;
        font-weight: bold;
    }
    hr{
        margin-top:0px;
    }
</style>