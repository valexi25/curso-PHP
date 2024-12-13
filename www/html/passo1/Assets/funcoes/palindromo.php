<div class='titulo'>Desafio Palindromo</div>
<?php
     function palindromo($palavra){
        $ultinoIndice = strlen($palavra) - 1;
        For($i = 0;$i <= $ultinoIndice; $i++){
            if($palavra[$i] !== $palavra[$ultinoIndice - $i]){
                return'Não';
            }
        }
        return 'Sim';
     }

    echo palindromo('arara').' ';
    echo palindromo('arara').' ';
    echo palindromo('bola').' ';
    echo palindromo('abccba').' <br>';

    function palindromoSimples($palavra){
        return $palavra === strrev($palavra)? 'Sim': 'Não';
    }
    
    echo palindromoSimples('arara').' ';
    echo palindromoSimples('arara').' ';
    echo palindromoSimples('bola').' ';
    echo palindromoSimples('abccba').' ';

?>
