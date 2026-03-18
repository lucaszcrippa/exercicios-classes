<?php

class Carro {
    public $marca;
    public $velocidade;

    public function __construct($marca, $velocidade = 0) {
        $this->marca = $marca;
        $this->velocidade = $velocidade;
    }

    public function acelerar() {
        $this->velocidade += 10;
    }
}

// Criando objeto
$carro1 = new Carro("Toyota");

// Velocidade antes
echo "Velocidade antes: " . $carro1->velocidade . " km/h<br>";

// Acelerando
$carro1->acelerar();

// Velocidade depois
echo "Velocidade depois: " . $carro1->velocidade . " km/h";

?>