<div class='titulo'>Desafio do Módulo</div>
<?php
    require_once('usuario.php');
    ini_set('display_errors',1);
    $usuario = new Usuario('Gustavo Mendoncça',21,'gust_mende');
    $usuario->apresentar();
    unset($usuario);
    unset($usuario);