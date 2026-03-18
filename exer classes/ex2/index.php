<?php

class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }
}

// Criando objeto
$p1 = new Produto("Notebook", 3500);

// Exibindo
echo "Produto: " . $p1->nome . " - R$ " . $p1->preco;

?>