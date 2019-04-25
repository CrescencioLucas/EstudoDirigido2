<?php 

 $NumAnterior = 0;
 $NumSucessor = 1;

  while($NumSucessor <= 500) {
      $NumSucessor = $NumSucessor + $NumAnterior;
      $NumAnterior = $NumSucessor - $NumAnterior;
      print "$NumSucessor \n";
  }