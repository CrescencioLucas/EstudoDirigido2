<?php

 print "Informe o valor de A:";
 $A = (float) fgets (STDIN);

 if ($A <> 0) {

    print "Informe o valor de B:";
    $B = (float) fgets (STDIN);
   
    print "Informe o valor de C:";
    $C = (float) fgets (STDIN);

} else {
    print "Não é uma equação de segundo grau se A=0 \n";
    exit;

}
    $delta = pow($B,2) - 4*$A*$C;
    print "O valor de Delta é: $delta \n";
 
 if ($delta > 0) {

   
    $x1 = (-$B + sqrt($delta))/2*$A;
    print "O valor de x1 é: $x1 \n";
   
    $x2 = (-$B - sqrt($delta))/2*$A;
    print "O valor de x2 é: $x2 \n";

 } else {
     print "Não exite raiz real do numero $delta \n";
     exit;
 }



 











