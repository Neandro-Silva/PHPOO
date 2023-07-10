<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }
    //----------------------------------//
    class Geladerira implements EquipamentoEletronicoInterface {
        public function abirPorta() {
            echo 'Abrir porta';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
    }
    
    class Tv implements EquipamentoEletronicoInterface {
        public function trocarCanal() {
            echo 'Mudar de canal';
        }

        public function ligar() {
            echo 'Ligar';
        }

        public function desligar() {
            echo 'desligar';
        }
       
    }

    $x = new Geladerira();
    $y = new Tv();

    //----------------------------//
    interface ManiferoInterface {
        public function respirar();

    }

    interface TerrestreInterface {
        public function andar();
    }

    interface AquaticoInterface {
        public function nadar();
    }

    class Humano implements ManiferoInterface, TerrestreInterface {
        public function andar() {
            echo 'Andar';
        }

        public function respirar() {
            echo 'Respirar';
        }

        public function conversar() {
            echo 'Conversar';
        }
    }

    class Baleia implements ManiferoInterface, AquaticoInterface {
        public function respirar() {
            echo 'Respirar';
        }

        public function nadar() {
            echo 'Nadar';
        }

        protected function esguichar() {
            echo 'Esguichar';
        }
    }

    //-----------------------------------------------//

    interface AnimalIntrface {
        public function comer();

    }

    interface AveInterface extends AnimalIntrface{
        public function voar();
    }

    class Papagaio implements AveInterface {
        public function voar() {
            echo 'Voar';
        }

        public function comer() {
            echo 'Comer';
        }
    }

?>
