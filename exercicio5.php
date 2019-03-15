<?php

print "Quantos quilometros você irá percorrer?: ";
$distancia = fgets(STDIN);

print "Qual a velocidade média esperada?: ";
$velocidade = fgets (STDIN);

$tempo_gasto = $distancia/$velocidade;

print "O tempo gasto foi de $tempo_gasto horas";


