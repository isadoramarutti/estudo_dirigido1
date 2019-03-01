<?php

    print "quantos cigarros vocÊ fuma por dia?"
    $cigarros_dia = fgets (STDIN);

    print "quantos anos você fuma?"
    $anos_fumados = fgets (STDIN);

    $cigarros = $cigarros_dia*365*$anos_fumados;
    $perdeu = $cigarros*11;
    $perdeu_horas = $perdeu/60;
    $perdeu_dias = round($perdeu_horas/24);

    print "você perdeu $perdeu_dias dias de vida.";