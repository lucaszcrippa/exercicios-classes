<?php

class ContaBancaria {
    public $titular;
    private $saldo;

    public function __construct($titular, $saldo = 0) {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        if ($valor <= 0) {
            echo "Erro: valor de depósito inválido.<br>";
            return;
        }
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor > $this->saldo) {
            echo "Erro: saldo insuficiente.<br>";
            return;
        }
        $this->saldo -= $valor;
    }

    public function verSaldo() {
        echo "Saldo de " . $this->titular . ": R$ " . number_format($this->saldo, 2, ",", ".") . "<br>";
    }
}

// Criando objeto
$conta = new ContaBancaria("Lucas", 1000);

// Testando depósitos e saques
$conta->verSaldo();
$conta->depositar(500);
$conta->verSaldo();
$conta->sacar(2000); // erro
$conta->sacar(300);
$conta->verSaldo();

?>