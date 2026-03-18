<?php

class Produto {
    private $nome;
    private $preco;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        if ($preco < 0) {
            echo "Erro: preço não pode ser negativo.<br>";
        } else {
            $this->preco = $preco;
        }
    }

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }
}

// Criando objeto
$produto = new Produto();

$produto->setNome("Mouse");

// Testando valor inválido
$produto->setPreco(-50);

// Definindo valor válido
$produto->setPreco(120);

// Exibindo
echo "Produto: " . $produto->getNome() . "<br>";
echo "Preço: R$ " . $produto->getPreco();

?>