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

    public function verificarAprovacao() {
        if ($this->nota >= 7) {
            return "Aprovado";
        } else {
            return "Reprovado";
        }
    }
}

// Criando objeto
$aluno = new Aluno();

$aluno->setNome("Carlos");
$aluno->setNota(6.5);

// Exibindo resultado
echo "Aluno: " . $aluno->getNome() . "<br>";
echo "Nota: " . $aluno->getNota() . "<br>";
echo "Situação: " . $aluno->verificarAprovacao();

?>
