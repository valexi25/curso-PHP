<div class='titulo'>Argumentos Padrão</div>

<?php
    function saudacao($nome = 'Senhor(a)', $sobenome = 'Cliente'){
        return "bem vindo, $nome $sobenome!<br>";
        
    }
    saudacao();

    echo saudacao();
    echo saudacao(null);
    echo saudacao(null);
    echo saudacao('Mestre','supremo');

    function anotarPedido($comida, $bebida = 'água'){
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    anotarPedido('Hamburguer');
    anotarPedido('Pizza','Refrigerante');

    



