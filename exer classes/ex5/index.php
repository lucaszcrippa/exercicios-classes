<?php

class Calculadora {

    public function somar($a, $b) {
        return $a + $b;
    }
}

// Criando objeto
$calc = new Calculadora();

// Exibindo resultado
$resultado = $calc->somar(5, 3);
echo "Resultado: " . $resultado;

?>