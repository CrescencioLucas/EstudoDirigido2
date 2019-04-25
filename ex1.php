<?php

 //maior numero

print "Informe o primeiro numero:";
$numero1 = (float) fgets (STDIN);

print "Informe o segundo numero:";
$numero2 = (float) fgets (STDIN);

if ($numero1 > $numero2) {
    print "O maior numero é $numero1 \n";

} else {
    print "O maior numero é $numero2 \n";
}
