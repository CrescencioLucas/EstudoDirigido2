<?php

print "Digite um número:";
$n1=(float) fgets (STDIN);

print "Digite outro número:";
$n2=(float) fgets (STDIN);

print "Digite mais um número:";
$n3=(float) fgets (STDIN);

if($n3>=$n2 && $n3>=$n1){
    print "O número $n3 é o maior \n";
}elseif ($n1>$n2 && $n1>$n3){
    print "O número $n1 é o maior \n";
}elseif ($n2>$n1 && $n2>$n3){
    print "O número $n2 é o maior \n";
}

if($n2<=$n3 && $n2<=$n1){
    print "O número $n2 é o menor \n";
}elseif($n1<=$n3 && $n1<=$n2){
    print "O número $n1 é o menor \n";
}elseif($n3<=$n1 && $n3<=$n2){
    print "O número $n3 é o menor \n";
}