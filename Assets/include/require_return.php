<div class='titulo'>Require & return </div>
<?php
    $valorRetorno = require('retun_usado.php');
    echo "$valorRetorno<br>";
    echo "$variavelRetonada<br>";
    echo __dir__.'<br>';
    $valorRetorno2 = require(__dir__.'/retun_nao_usado.php');
    echo "$valorRetorno2<br>";
    echo "$variavelRetonada<br>";