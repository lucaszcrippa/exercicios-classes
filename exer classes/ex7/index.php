<?php

class Aluno {
    private $nome;
    private $nota;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNota() {
        return $this->nota;
    }
}

// Criando objeto
$aluno = new Aluno();

// Definindo valores
$aluno->setNome("Maria");
$aluno->setNota(8.5);

// Exibindo valores
echo "Aluno: " . $aluno->getNome() . "<br>";
echo "Nota: " . $aluno->getNota();

?>