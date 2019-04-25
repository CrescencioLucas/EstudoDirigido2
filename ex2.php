<?php

    print "Digite um número:";
    $numero = (float) fgets (STDIN);

    if ($numero<0) {
        print "O número digitado é negativo \n";
    }else{
        print "O número digitado é positivo \n";
    }