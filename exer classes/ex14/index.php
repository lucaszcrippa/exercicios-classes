<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

class Carrinho {
    private $produtos = [];

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

    public function exibir() {
        echo "Produtos no carrinho:<br>";
        foreach ($this->produtos as $produto) {
            echo "- " . $produto->nome . " - R$ " . number_format($produto->preco, 2, ",", ".") . "<br>";
        }
        echo "Total: R$ " . number_format($this->calcularTotal(), 2, ",", ".") . "<br>";
    }
}

// Criando produtos
$p1 = new Produto("Notebook", 3500);
$p2 = new Produto("Mouse", 120);

// Criando carrinho
$carrinho = new Carrinho();
$carrinho->adicionarProduto($p1);
$carrinho->adicionarProduto($p2);

// Exibindo carrinho
$carrinho->exibir();

?>