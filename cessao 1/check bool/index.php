<?php
    $a = true;

    if(is_bool($a)){
        echo "es um boolean <br>";
    }

    if(is_bool(0)){
        echo "nao es um boolean";
    }
    if(is_bool(FALSE)){
        echo "es um boolean False";
    }
    

?>