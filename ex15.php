<?php

print "Informe o primeiro numero:";
$numero1 = (float) fgets (STDIN);

print "Informe o segundo numero:";
$numero2 = (float) fgets (STDIN);

print "Informe o terceiro numero:";
$numero3 = (float) fgets (STDIN);

print "Informe o quarto numero:";
$numero4 = (float) fgets (STDIN);

print "Informe o quinto numero:";
$numero5 = (float) fgets (STDIN);

$numeros = array ($numero1, $numero2, $numero3, $numero4, $numero5);

rsort ($numeros);

print "$numeros[0] \n";