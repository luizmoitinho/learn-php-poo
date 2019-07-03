<?php

    class Veiculo{
        public $modelo, $cor,$ano;

        public function mover(){
            echo "andou";

        }
        public function parar(){
            echo "parou";
        }

    }
    class Carro extends Veiculo {


        public function ligarLimpador(){
            echo "Limpado  em 3,2,1..";
        }


    }
    class Moto extends Veiculo {
        public function empinar(){
            echo " Empinado em 3,2,1...";
        }
    }



    $carro = new Carro();
    $carro->mover();

    echo "<Br>";
    $carro->ligarLimpador();

    echo "<Br>";
    $carro->ligarLimpador();
?>