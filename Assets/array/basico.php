<div class= "titulo">Array</div>
<?php
    $a =[1,2,3,4,'texto',6,7];

    echo $texto[11].'<br>' ;
    echo $a[0].'<br>';
    echo $texto[1].'<br>' ;
    //echo '<br>';
    echo $a[2].'<br>';
    //echo '<br>';
    echo $a[3].'<br>';
    //echo '<br>';
    echo $a[4].'<br>';
    //echo '<br>';
    echo $a[5].'<br>';
    //echo '<br>';
    echo $a[6].'<br>';
    echo mb_substr($a, 1, 1);
    echo $a[1].'<br>';
    $d = 'este es um texto teste';
    print_r('<br>'.$d[2]);
    print_r($a);
    echo 'novo';
    $texto = 'este é um testo de teste';
    if (mb_strlen($texto) > 11) {
        echo '<br>' . mb_substr($texto, 11, 1);
    } else {
        echo "Texto não tem caracteres suficientes.";
    }
?>