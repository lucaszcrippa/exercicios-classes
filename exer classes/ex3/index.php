<?php

class Conta {
    public $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function verSaldo() {
        echo "Saldo atual: R$ " . $this->saldo;
    }
}

// Criando objeto
$conta1 = new Conta(1500);

// Testando
$conta1->verSaldo();

?>