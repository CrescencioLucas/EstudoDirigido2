<?php

$nPar = 0;
$nImpar = 0;

    for ($contador = 1; $contador <= 10; $contador++) {
        print "\n Digite um número: ";
            $numero = (int) fgets (STDIN);

                if ($numero % 2 == 0) {
                    $nPar += 1;
                }
                else {
                    $nImpar +=1;
                }
    }

        print "\n O total de números pares é: $nPar e o total de números ímpares é: $nImpar \n";