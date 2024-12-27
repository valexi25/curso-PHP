<div class='titulo'>Ciclo de repetiçao FOR</div>

<?php
    for($cont = 1; $cont <= 5;$cont++){
        echo "$cont <br>";
    }
    echo "<hr>";
    for(;$cont <= 10; $cont++){
        echo "$cont <br>";
    }
    echo "<hr>";
    for(; $cont <= 15;$cont++){
        echo "$cont <br>";
    }

    $array = [1 =>'Domingo','Segunda','Terça','Qauarta','Quinta','Sexta','Sabado'];
    print_r($array);
    echo'<br>';
    echo "<hr>";
    for($i = 0; $i < count($array); $i++){
        echo "{$array[$i]}<br>";
    }
    $atrix =[
        ['a','e','i','o','u'],
        ['b','c','d']
    ];

    echo "<hr>";
    for($i = 0; $i < count($atrix);$i++){
        for($j = 0; $j < count($atrix[$i]); $j++){
            echo "{$atrix[$i] [$j]}";
        }
        echo  '<br>';
    }
