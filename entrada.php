<?php

require_once "biblioteca.php";

use function logica\verificaidade;
use function matematica\Somar;
use function texto\Concatenar;
use function logica\verificaExercito;

echo "Soma: ", Somar(1,1,1), "\n";
echo "Nome Completo: ", Concatenar("João", "silva");
echo "Status: ", verificaidade(19);
echo "Status: ", verificaExercito("Masculino", 19);