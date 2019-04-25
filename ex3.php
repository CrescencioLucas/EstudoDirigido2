<?php
//sexo F e M.

print "Informe o seu sexo (F/M):";
$sexo = (string) fgetc (STDIN);


if ($sexo == "F") {
    print "Sexo Feminino cadastrado \n"; 
} elseif ($sexo == "M") {
    print "Sexo Masculimo cadastrado \n";
} else {
    print "Sexo invalido \n";
}


