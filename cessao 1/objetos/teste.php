<?php
    class pessoa{
        function caminhar(){
            echo "dois passos";
        }
    }

    $cistina = new pessoa();
    $cistina -> nome = "cistina";
    echo $cistina -> nome;
    echo "<br>";
    echo $cistina -> caminhar();


?>