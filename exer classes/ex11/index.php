<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function aplicarDesconto($percentual) {
        if ($percentual < 0 || $percentual > 100) {
            echo "Erro: percentual inválido.<br>";
            return;
        }
        $this->preco -= $this->preco * ($percentual / 100);
    }

    public function exibir() {
        echo "Produto: " . $this->nome . " - R$ " . number_format($this->preco, 2, ",", ".");
    }
}

// Criando objeto
$produto = new Produto("Notebook", 3500);

// Aplicando desconto
$produto->aplicarDesconto(10);

// Exibindo
$produto->exibir();

?>