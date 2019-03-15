<?php

print "Quantos dias você deseja alugar o carro?: ";
$dias_alugados = fgets (STDIN);

print "Quantos quilometros você deseja percorrer?: ";
$quilometros_percorridos = fgets (STDIN);

$valor_pagar = (60*$dias_alugados) + (0.15*$quilometros_percorridos);

print "O valor a ser pago é de $valor_pagar reais";


