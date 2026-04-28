<?php

require_once 'bibliotecaGeometria.php';

use function conversao\calcularImc;
use function conversao\valorIdealAgua;
use function conversao\frequenciaCardiacaMaxima;
use function conversao\converterLibrasParaQuilo;
use function conversao\calcularCaloriasBasais;

echo "O lmc deu: ", calcularImc (100, 5);
echo "\nO valor ideal de água é: ", valorIdealAgua (100, 5);
echo "\nA frequencia cardiaca máxima é: ", frequenciaCardiacaMaxima (100, 5);
echo "\nA conversão deu: ", converterLibrasParaQuilo (100, 5);
echo "\nO tanto de calorias basais é: ", calcularCaloriasBasais (50, 1.75, 15, "Masculino");