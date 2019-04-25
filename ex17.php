<?php

print "Informe um numero para base:";
$base = (float) fgets (STDIN);

print "Informe um numero para ser o expoente:";
$expoente = (float) fgets (STDIN);

$resultado = $base ** $expoente;

print "$resultado \n";