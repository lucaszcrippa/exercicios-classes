<?php

class Lampada {
    public $status;

    public function __construct() {
        $this->status = "desligada";
    }

    public function ligar() {
        $this->status = "ligada";
    }

    public function desligar() {
        $this->status = "desligada";
    }
}

// Criando objeto
$lampada = new Lampada();

// Estado inicial
echo "Status: " . $lampada->status . "<br>";

// Ligando
$lampada->ligar();
echo "Status após ligar: " . $lampada->status . "<br>";

// Desligando
$lampada->desligar();
echo "Status após desligar: " . $lampada->status;

?> 