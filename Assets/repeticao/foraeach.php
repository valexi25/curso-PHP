<div class="titulo">Foreach</div>
<?php  
    $array = [2 =>'Domingo','Segunda','Terça','Qauarta','Quinta','Sexta','Sabado'];
    foreach($array as $valor){
        echo "$valor <br>";
    }

    foreach ($array as $indice => $valor){
        echo "$indice => $valor <br>";
    }


    $matrix =[
        ['a','e','i','o','u'],
        ['b','c','d']
    ];

    foreach ($matrix as $linha){
        //echo "linha <br>";
        foreach($linha as $valor){
            echo"$valor ";
        }
        echo"<br>";
    }

    $numero = [1,2,3,4,5];
    foreach($numero as $dobra){
        $dobra *= 2;
        echo "$dobra <br>";
    }
    print_r($numero);