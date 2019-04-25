<?php

    print "Informe um número: ";
    $n1=(float) fgets (STDIN);

    print "Informe mais um número: ";
    $n2=(float) fgets (STDIN);

    print "Informe outro número: ";
    $n3=(float) fgets (STDIN);

    print "Informe um penúltimo número: ";
    $n4=(float) fgets (STDIN);

    print "Informe um último número: ";
    $n5=(float) fgets (STDIN);

    $soma= $n1+$n2+$n3+$n4+$n5;

    print "A soma dos números é: $soma \n";

    $media= $soma/5;

    print "A média dos números é: $media \n";