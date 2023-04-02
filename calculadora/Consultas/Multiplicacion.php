<?php

class Multiplicacion{
    public $numero1;
    public $numero2;

    public function __construct($_numero1, $_numero2)
    {
        $this->numero1 = $_numero1;
        $this->numero2 = $_numero2;
    }

    public function multiplicar()
    {
    
        echo "La multiplicacion de los numeros es: ". $this->numero1 * $this->numero2;
    }
}

$total = new Multiplicacion($_POST['numero1'], $_POST['numero2']);
$total->multiplicar();
?>