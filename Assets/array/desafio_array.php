<div class= 'titulo'>Desafio Sorteio</div>

<?php
    $nomes= ["Elsa","Rapunzel","Branca de neve","Cinderela"];
    $sorteo = array_rand($nomes);
    echo "<h1><center>$nomes[$sorteo]</center></h1>";
