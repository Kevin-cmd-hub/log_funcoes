<?php

require_once 'bibliotecafuncaoes.php';

use function calcular\areaQuadrado;
use function calcular\areaRetangulo;
use function calcular\areaTriangulo;
use function calcular\areaCirculo;
use function calcular\areaTrapezio;

echo "A conversão deu: ", areaQuadrado (10, 5);
echo "\nA conversão deu: ", areaRetangulo (10, 5);
echo "\nA conversão deu: ", areaTriangulo (10, 6);
echo "\nA conversão deu: ", areaCirculo (10, 6.73);
echo "\nA conversão deu: ", areaTrapezio (10, 6, 5);