<?php
    class Pessoa{
        public $nome;
        public $idade;

        function __construct($nome, $idade){
            $this-> nome =$nome;
            $this->idade = $idade;
            echo 'Pessoa Criada!<br>';
        }
        function __destruct(){
            echo 'Pesssoa diz: Tchau!!';
            echo 'Pesssoa diz: Tchau!!';
        }
        public function apresentar(){
            echo "{$this->nome}, {this->idade}";
        }
    }