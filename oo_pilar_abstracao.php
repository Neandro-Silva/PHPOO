<?php

    //modelo
    class Funcionario {
        public $nome = null;
        public $telefone = null;
        public $numFilho = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecargar)
        function __set($atributo, $valor) {
            $this->$atributo = $valor;
        }

        function __get($atributo) {
            return $this->$atributo;
        }
        /*
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
        }*/

        //métodos
        function resumirCadFunc() {
            if($this->__get('numFilho')) {
                return $this->__get('nome') . ', possui ' . $this->__get('numFilho') . ' filho(s)';
            }else {
                return $this->__get('nome') . ', não possui ' . $this->__get('numFilho') . ' filho(s)';
            }
            
        }

        function modificarNumFilhos($numFilho) {
            //afetar um atributo do objeto
            $this->numFilho = $numFilho;
        }
    }

    $y = new Funcionario();

    $y->__set('nome', 'José');
    $y->__set('numFilho', 2);
    $y->__set('telefone', '749999-9999');
    $y->__set('cargo', 'Programador PHP');
    $y->__set('salario', '4.500,00');
   // echo $y->__get('nome') . ' possue ' . $y->__get('numFilhos') . ' filho(s), o número de telefone é ' . $y->__get('telefone') . ', trabalha como ' . $y->__get('cargo') . ', com salario de ' . $y->__get('salario');
   echo $y->resumirCadFunc(); 
   echo '<br>';
    $x = new Funcionario();
    $x->__set('nome', 'Maria');
    $x->__set('numFilhos', 0);
    $x->__set('telefone', '749991-9191');
    $x->__set('cargo', 'Programadora Python');
    $x->__set('salario', '5.000,00');
   // echo $x->__get('nome') . ' possue ' . $x->__get('numFilhos') . ' filho(s), o número de telefone é ' . $x->__get('telefone') . ', trabalha como ' . $x->__get('cargo') . ', com salario de ' . $x->__get('salario');
   echo $x->resumirCadFunc();
?>