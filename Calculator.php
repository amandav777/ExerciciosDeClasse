<?php

class Calculator
{
    public function calculate(float $num1, float $num2, string $op)
    {
        $result = 0;

        #isso aqui é tipo um if (o switch) e o case é literalmente (caso
        switch ($op) {
            case 'sum':
                $result = $num1 + $num2;
                break;
            case 'sub':
                $result = $num1 - $num2;
                break
        default:
                $result = 'Error';
        }

        return $result;
    }
}

$calc = new Calculator()
$resultado = $calc->calculate(1, 2, 'sum');
echo $resultado . "<br>";


$resultado2 = $calc->calculate(10, 5, 'sub');
echo $resultado2 . "<br>";

?>