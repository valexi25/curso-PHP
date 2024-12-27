<div class='titulo'>Desafio for</div>

<?php
    $impressao = ' ';
    for($cont = 1 ; $cont <= 5; $cont++){
        $impressao .= '#';
        echo "$impressao <br>";
    }

    echo '<br>';
    for($impressao2 = '#'; $impressao2 !== '######';$impressao2.='#'){
        echo "$impressao2<br>";
    }