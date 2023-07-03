<?php

    class Carro extends Veiculo {

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }
        public $teto_solar = true;
        function abriTetoSolar() {
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante() {
            echo 'Alterar posição do volante';
        }
    }

    class Moto extends Veiculo {
        public $contraPesoGuidao = true;

        function __construct($placa, $cor) {
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar() {
            echo 'Empinar';
        }
        function trocarMarcha() {
            echo 'Desengatar embreagem com a mão e engatar marcha com o pé';
        }
    }

    class Veiculo {
        public $placa = null;
        public $cor = null;

        function acelerar() {
            echo 'Acelerar';
        }

        function freiar() {
            echo 'Freiar';
        }

        function trocarMarcha() {
            echo 'Desengatar embreagem com pé e engatar marcha com a mão';
        }
    }

    class Caminhao extends Veiculo {
        
    }


    $corro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Vermelha');
    $caminhao =  new Caminhao();


    $corro->trocarMarcha();
    echo '<br>';
    $moto->trocarMarcha();
    echo '<br>';
    $caminhao->trocarMarcha();
    
?>