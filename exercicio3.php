<?php

print "digite aqui o valor do seu salario: ";
$salario_inicial = fgets (STDIN);

print "digite o percentual de aumento: ";
$aumento = fgets (STDIN);

$aumento_porcentagem = $aumento/100;

$salario_final = $salario_inicial + ($aumento_porcentagem*$salario_inicial);

print "Seu salario final é de $salario_final.";
