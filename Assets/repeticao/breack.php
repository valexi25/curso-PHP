<div class='titulo'>Break/contnue</div>
<?php
     $cont = 10;
     for(;;){
        echo "$cont <br>";
        $cont++;
        if($cont >20){
            break;
        }
     }
     echo "fim!"; 

    echo "<br>";
    echo "<hr>";
    echo "<br>";
     for(;;){
        $cont ++;
        if($cont % 2 ===1){
            continue;
        }
        echo "$cont <br>";
        if($cont >= 30){
            break;
        }
    }

    foreach(array(1,2,3,4,5,6) as $valor){
        if($valor === 5)break;
        if($valor % 2 === 0) continue;
        echo "$valor <br>";
    }
echo "fim!"; 