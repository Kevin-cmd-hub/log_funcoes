<?php

//funçoes em PHP
echo "Na aula do dia 23/04/2026 eu aprendi a mexer no GitHub/Git e desenvolver funçoes no PHP! =D \n";

function Somar($a, $b, $c){
    return $a + $b + $c;
}

echo "Resultado: ", Somar(10,5,3), "\n"; 


function Subtrair($a, $b){
    return $a - $b;
}

echo "Resultado: ", Subtrair(10,5), "\n";

function Dividir($a, $b){
    return $a / $b;
}

echo "Resultado: ", Dividir(10,5), "\n";

function Multiplicar($a, $b){
    return $a * $b;
}

echo "Resultado: ", Multiplicar(10,5),"\n";