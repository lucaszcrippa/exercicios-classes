    <?php
class Pessoa {
    public $nome; // atributo público

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function apresentar() {
        echo "Olá, meu nome é " . $this->nome;
    }
}

// Criando um objeto e testando
$p1 = new Pessoa("João");
$p1->apresentar();

?>