<?php

/* Crie uma classe Quadrado que tem altura e largura, com dois métodos,
um retorna a área e outro o perímetro */

class Quadrado
{

    public $altura;
    public $largura;


    public function area()
    {
        $area = $this->altura * $this->largura;
        return $area;
    }
    
    public function perimetro()
    {
        $perimetro = $this->altura + $this->altura + $this->largura + $this->largura;
        return $perimetro;
    }


}

$q1 = new Quadrado();
$q1->$altura = 20;
$q1->$largura = 10;

echo $q1->area();
echo $q1->perimetro();