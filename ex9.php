<?php

print "Digite um número:";
$n1=(float) fgets (STDIN);

print "Digite outro número:";
$n2=(float) fgets (STDIN);

print "Digite mais um número:";
$n3=(float) fgets (STDIN);

if($n1>$n2 && $n2>$n3){
    print "A ordem decrescente é: $n1, $n2, $n3 \n";
}elseif($n3>$n1 && $n1>$n2){
    print "A ordem decrescente é: $n3, $n1, $n2 \n";
}elseif($n2>$n3 && $n3>$n1){
    print "A ordem decrescente é: $n2, $n3, $n1 \n";
}elseif($n1>$n3 && $n3>$n2){
    print "A ordem descrescente é: $n1, $n3, $n2 \n";
}elseif($n3>$n2 && $n2>$n1){
    print "A ordem descrescente é: $n3, $n2, $n1 \n";
}elseif($n2>$n1 && $n1>$n3){
    print "A ordem descrescente é: $n2, $n1, $n3 \n";
}