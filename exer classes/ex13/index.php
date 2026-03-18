<?php

class Aluno {
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
    }

    public function media() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao() {
        $media = $this->media();
        return $media >= 7 ? "Aprovado" : "Reprovado";
    }

    public function exibir() {
        echo "Aluno: " . $this->nome . "<br>";
        echo "Notas: " . $this->nota1 . " e " . $this->nota2 . "<br>";
        echo "Média: " . number_format($this->media(), 2, ",", ".") . "<br>";
        echo "Situação: " . $this->situacao() . "<br>";
    }
}

// Criando objeto
$aluno = new Aluno("Fernanda", 8, 6.5);

// Exibindo resultados
$aluno->exibir();

?>