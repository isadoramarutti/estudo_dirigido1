<?php

print "quantos metros você deseja pintar? ";
$metros_p_pintar =(int) fgets (STDIN);

$quant_latas = ceil ($metros_p_pintar/108); //rendimento de uma lata 
$quant_faltante = ceil ($metros_p_pintar % 108);
$quant_galoes = ceil ($quant_faltante / 21.6); // rendimento de um galao

print "a quantidade de latas é de $quant_latas latas, e a quantidade de galões é de $quant_galoes galões.";

$preco_latas = ceil($quant_latas*80);
$preco_galoes = ceil ($quant_galoes*25);

print " A quantidade a pagar sera de $preco_latas reais nas latas e $preco_galoes reais nos galões.";