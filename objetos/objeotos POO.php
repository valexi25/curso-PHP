<?php
    class pessoa {
        function falar(){
            echo "Ola pessoal!!";
        }
    }



    $mateus = new pessoa();
    $mateus -> nome = "Matheus";
    echo $mateus->nome;

    echo "<br>";
    echo $mateus -> falar();

?>