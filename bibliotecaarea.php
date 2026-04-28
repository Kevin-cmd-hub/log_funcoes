<?php

// Função areaQuadrado($lado)
// Função areaRetangulo($base, $altura)
// Função areaTriangulo($base, $altura)
// Função areaCirculo($raio)
// Função areaTrapezio($baseMaior, $baseMenor, $altura)

namespace calcular{
    function areaQuadrado($lado){
        return $lado * $lado;
    }

    function areaRetangulo($base, $altura){
        return $base * $altura;
    }

    function areaTriangulo($base, $altura){
        return $base * $altura;
    }

    function areaCirculo($raio){
        return $raio**2 * 3.14;
    }

    function areaTrapezio($baseMaior, $baseMenor, $altura){
        return $baseMaior * $baseMenor * $altura;
    }
}