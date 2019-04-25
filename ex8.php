<?php


print "Informe o valor do primeiro produto:";
$valor1 = (float) fgets (STDIN);

print "Informe o valor do segundo produto:";
$valor2 = (float) fgets (STDIN);

print "Informe o valor do terceiro produto:";
$valor3 = (float) fgets (STDIN);

if ($valor1 < $valor2 and $valor1 < $valor3) {
    print "Você deve comprar o primeiro produto que custa $valor1 \n";
} elseif ($valor2 < $valor1 and $valor2 < $valor3) {
    print "Você deve comprar o segundo produto que custa $valor2 \n";
} elseif ($valor3 < $valor1 and $valor3 < $valor2) {
    print "Você deve comprar o terceiro produto que custa $valor3 \n";
}

