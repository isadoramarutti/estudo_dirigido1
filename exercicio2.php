<?php

print "Quantos dias você deseja converter?: ";
$dias =  fgets (STDIN);

print "Quantas horas você deseja converter?: ";
$horas =  fgets (STDIN);

print "Quantos minutos você deseja converter?: ";
$minutos =  fgets (STDIN);

print "Quantos segundos você deseja converter?: ";
$segundos = fgets (STDIN);

$dias_convertidos = $dias*86400; 
$horas_convertidos = $horas*3600;
$minutos_convertidos = $minutos*60;

$total_segundos = $dias_convertidos + $horas_convertidos + $minutos_convertidos + $segundos ; 

print "O total de segundos que $dias dias $horas horas $minutos minutos $segundos segundos, possui é de $total_segundos";