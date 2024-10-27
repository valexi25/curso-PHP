<?php
    $pessoa = [
        "nome" => "jose",
        "edade" => "34",
        "altura" => 1.75,
        "pesso" => 70 ,
        "grao_escolaridade" => "faculdade",
        "carro" => FALSE
    ] ;
    if($pessoa["edade"]>= 18 ){
        echo "A pessoa $pessoa[nome] tem $pessoa[edade] e maior de edade, tem um pesso de  $pessoa[pesso], seu grado de escolaridade é $pessoa[grao_escolaridade], ";
        if($pessoa["carro"] = true){
            echo "possue carro";
        }
    }
?>