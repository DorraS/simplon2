<?php

/**
 * Ecrire un script qui calcul la somme des entiers de 1 a 20
 * et afficher le resultat
 */

$total = 0;
for($i=1;$i<=20;$i++) {
    $total = $total + $i;
}

echo "Total : $total";