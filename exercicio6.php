<?php

print "Quantos graus Celsius você deseja converter?: ";
$celsius = fgets (STDIN);

$celsius_convertidos = (9*$celsius/5) + 32; 

print "$celsius convertidos para Fahrenheit são $celsius_convertidos";

