<?php

class Usuario {
    private $email;
    private $senha;

    public function __construct($email, $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function login($email, $senha) {
        if ($this->email === $email && $this->senha === $senha) {
            return "Login bem-sucedido!";
        } else {
            return "Erro: email ou senha inválidos.";
        }
    }
}

// Criando usuário
$usuario = new Usuario("teste@exemplo.com", "123456");

// Testando login
echo $usuario->login("teste@exemplo.com", "123456") . "<br>"; // sucesso
echo $usuario->login("teste@exemplo.com", "senhaerrada") . "<br>"; // falha

?>