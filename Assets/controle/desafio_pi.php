<div class='titulo'>Desafio PI</div>

<?php
    echo pi();
    $pi = 3.14;

    if($pi == pi()){
        echo "<br>Iguais!";
    }else{
        echo "<br>Diferentes!";
    }

//Operador relacional
    $piErrado = 2.8;
 if($pi - pi() <= 00.1){
    echo "<br> Precisão quase iguais";
 }else{
    echo "<br>valor diferentes!!";
 }
