<div class= 'titulo'>Desafio equação </div>

<?php
    $numA =(6 *( 3 + 2))** 2;
    $denA = 3 * 2;
    $numB = (1- 5) * (2 - 7);
    $denB = 2;
    
    $superiorA = $numA / $denA;//5400
    $superiorB = ($numB / $denB)** 2;//100
    
    $superior = ($superiorA - $superiorB) ** 3;
    $inferior = 10 ** 3;

    $d = $superior / $inferior;
    echo "O resutado final é ". $d .".";
?>