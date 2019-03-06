 <?php

print "quantos metros você deseja converter? ";
$metros = (float) fgets (STDIN);

$milimetros = $metros*1000;

print "$metros m tem $milimetros mm";
