<?php

    //modelo
    class Funcionario {
        public $nome = 'Neandro';
        public $telefone = 7499999-9999;
        public $numFilho = null;

        //métodos
        function resumirCadFunc() {
            if($this->numFilho) {
                return "$this->nome, possui $this->numFilho filho(s)";
            }else {
                return "$this->nome, não possui $this->numFilho filho(s)";
            }
            
        }

        function modificarNumFilhos($numFilho) {
            //afetar um atributo do objeto
            $this->numFilho = $numFilho;
        }
    }

    $y = new Funcionario();
    echo $y->resumirCadFunc();
    echo '<br>';
    $y->modificarNumFilhos(1);
    echo $y->resumirCadFunc();
    echo '<hr>';

    $x = new Funcionario();
    echo $x->resumirCadFunc();
    echo '<br>';
    $x->modificarNumFilhos(10);
    echo $x->resumirCadFunc();
?>