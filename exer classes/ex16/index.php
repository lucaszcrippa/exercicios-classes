<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class Cliente {
    public $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Pedido {
    private $cliente;
    private $produtos = [];

    public function __construct(Cliente $cliente) {
        $this->cliente = $cliente;
    }

    public function adicionarProduto(Produto $produto) {
        $this->produtos[] = $produto;
    }

    public function calcularTotal() {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total += $produto->preco;
        }
        return $total;
    }

    public function exibirResumo() {
        echo "Resumo do pedido para " . $this->cliente->nome . ":<br>";
        foreach ($this->produtos as $produto) {
            echo "- " . $produto->nome . " - R$ " . number_format($produto->preco, 2, ",", ".") . "<br>";
        }
        echo "Total: R$ " . number_format($this->calcularTotal(), 2, ",", ".") . "<br>";
    }
}

// Criando produtos
$produto1 = new Produto("Notebook", 3500);
$produto2 = new Produto("Mouse", 120);
$produto3 = new Produto("Teclado", 250);

// Criando cliente
$cliente = new Cliente("Lucas");

// Criando pedido
$pedido = new Pedido($cliente);
$pedido->adicionarProduto($produto1);
$pedido->adicionarProduto($produto2);
$pedido->adicionarProduto($produto3);

// Exibindo resumo
$pedido->exibirResumo();

?>