<?php

class Calculadora {
    public $numero1;
    public $numero2;
    public $operador;

    public function __construct(float $numero1, float $numero2, string $operador) {
        $this->numero1 = $numero1;
        $this ->numero2 = $numero2;
        $this->operador = $operador;
    }

    public function calculo():void {
        switch ($this->operador) {
            case "+":
                echo "A soma é: " .$this->numero1 + $this->numero2;
                break;

            case "-":
                echo "A subtração é: " .$this->numero1 - $this->numero2;
                break;
            
            case "*":
                echo "A Multiplicação é: ". $this ->numero1 * $this->numero2;
                break;

            case "/":
                echo "A divisão é: " .$this->numero1 / $this->numero2;
                break;

            default:
                echo "Operador inválido";

        }


    }

}

$soma = new Calculadora(5,5,"+");
echo $soma->calculo();

echo "<hr>";

$subtracao = new Calculadora(5,9,"-");
echo  $subtracao->calculo();

echo "<hr>";

$multiplicacao = new Calculadora(10, 5, "*");
echo $multiplicacao->calculo();

echo "<hr>";

$divisao = new Calculadora(10,5,"/");
echo $divisao->calculo();