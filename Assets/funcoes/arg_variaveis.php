<div class='titulo'>Argumentos Variáveis</div>

<?php
    function soma($a,$b){
        return $a+$b;
    }
    echo soma(4 , 5,6 ,7,8,8,9).'<br>';


    function somaCompleta(...$numeros){
        $soma = 0;
        foreach($numeros as $num){
            $soma += $num;
        }
        return $soma;
    }
    echo somaCompleta(1,2,3,4,15);

    function menbros($titular,...$dependentes){
        echo "Titular: $titular <br>" ;
        if($dependentes){
            foreach($dependentes as $dep){
                echo "Dependente: $dep <br>";
            }
        }
    }
    echo '<br>';
    menbros("Ana Silva","Pedro","Rafaela","Amanda");

    function bastball($treinador,...$jogadores){
        echo "Treinador: $treinador <br>";
        if($jogadores ){
            foreach($jogadores as $joga){
                echo "Jogadores: $joga <br>";
            }
            
        }
    }

    echo '<br> <br>';
    bastball("Jorge","Pedro","Tulio","henri");
?>
