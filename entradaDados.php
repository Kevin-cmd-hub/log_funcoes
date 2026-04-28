<?php

require_once 'bibliotecafuncaoes.php';

use function conversao\dolarParaReal;
use function conversao\euroParaReal;
use function conversao\pesoParaReal;
use function conversao\libraParaReal;
use function conversao\ieneParaReal;

echo "A conversão deu: ", dolarParaReal (100, 5);
echo "A conversão deu: ", euroParaReal (100, 5.84);
echo "A conversão deu: ", pesoParaReal (100, 0.0035);
echo "A conversão deu: ", libraParaReal (100, 6.73);
echo "A conversão deu: ", ieneParaReal (100, 0.031);