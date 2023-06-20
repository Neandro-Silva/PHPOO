<?php

    //modelo
    class Funcionario {
        public $nome = null;
        public $telefone = null;
        public $numFilho = null;

        //getters setters
        function setNome($nome) {
            $this->nome = $nome;
        }

        function setTelefone($telefone) {
            $this->telefone = $telefone;
        }

        function setNumFilhos($NumFilhos) {
            $this->numFilho = $NumFilhos;
        }

        function getNome() {
            return $this->nome;
        }

        function getTelefone() {
            return $this->telefone;
        }

        function getNumFilhos() {
            return $this->numFilho;
        }

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
    $y->setNome('José');
    $y->setNumFilhos(2);
    echo $y->resumirCadFunc();
    $x = new Funcionario();
 
?>