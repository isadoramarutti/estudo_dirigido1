<?php

print "Qual o preço da mercadoria?";
$preco_inicial = fgets (STDIN);

print "Qual o percentual de desconto?";
$desconto = fgets (STDIN);

$desconto_final = $desconto/100;

$preco_final = $preco_inicial - ($desconto_final*$preco_inicial);

print "O valor final do produto é de $preco_final";