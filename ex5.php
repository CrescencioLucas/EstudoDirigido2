<?php 

print "Informe a primeira nota do aluno:";
$nota1 = (float) fgets (STDIN);

print "Informe a segunda nota do aluno:";
$nota2 = (float) fgets (STDIN);

$somaNota = $nota1 + $nota2;
$media = $somaNota/2;

if ($media >= 7 and $media < 10) {
    print "Aluno aprovado com a média $media \n";
} elseif ($media < 7) {
    print "Aluno reprovado com a média $media \n";
} elseif ($media == 10) {
    print "Aluno aprovado com distinção com a média $media \n";
}