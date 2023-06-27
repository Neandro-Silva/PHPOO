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
    }

    $corro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1122', 'Vermelha');

    echo '<pre>';
    print_r($corro);
    echo '<br><br>';
    print_r($moto);
    echo '</pre>';
    echo '<hr>';

    $corro->abriTetoSolar();
    echo '<br>';
    $corro->acelerar();
    echo '<br>';
    $corro->freiar();

    echo '<hr>';
    $moto->empinar();
    echo '<br>';
    $moto->acelerar();
    echo '<br>';
    $moto->freiar();
?>