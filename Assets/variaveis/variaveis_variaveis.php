<div class= 'titulo'>Variáveis de Variáveis<div>

<?php
    $a = 'valorA';
    $$a = 'vaalorAA';
    echo "$a {$$a} ${$a} $valorA";
?>