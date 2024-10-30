<?php
    $x = 20;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>";

    $y = 40;
    echo "valor apos ref";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br>"
?>