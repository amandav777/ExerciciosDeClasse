<?php

/* Crie uma classe Quadrado que tem altura e largura, com dois métodos,
um retorna a área e outro o perímetro */

class Quadrado
{
    public function area(float $altura, float $largura)
    {
        return ($altura * $largura);
    }
    
    public function perimetro(float $altura, $largura)
    {
        return ($altura + $largura + $altura + $largura);
    }

}


$quad = new Quadrado();
$resultadoArea = $quad->area(4, 5);
echo $result . "<br>";

$resultadoPerimetro = $quad->perimetro(4,5);
echo $result . "<br>";
