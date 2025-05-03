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

if (isset($_GET["numero1"]) && $_GET["numero2"] && $_GET["operador"] === "+") {


$soma = new Calculadora( $_GET['numero1'], $_GET["numero2"], $_GET["operador"]);
$soma->calculo();
}
echo "<hr>";

$subtracao = new Calculadora(5,9,"-");
$subtracao->calculo();

echo "<hr>";

$multiplicacao = new Calculadora(10, 5, "*");
$multiplicacao->calculo();

echo "<hr>";

$divisao = new Calculadora(10,5,"/");
echo $divisao->calculo();

echo "<hr>";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculadora.php">
        <input type="number" name="numero1">
        <input type="number" name="numero2">
        <input type="text" name="operador">
        <input type="submit" value="Enviar">
        <?php  ?>
    </form>
</body>
</html>