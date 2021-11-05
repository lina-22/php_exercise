<?php
$moment="weekend";
$prix;

if($moment=="semaine")
{
    $prix=20;
}
elseif($moment=="weekend"){
    $prix=40;
}
echo "Le prix de base est $prix <br>";


// si mon age est inferieur a 14
// alors le taux = 0,5
// sinon si mon age est inferieur a 16
// alors le taux est = 0,75
// sinon 
// le taux est 1
// le prix = prix*taux 

$monAge=15;
$taux;
$resultat;


if ($monAge < 14)
{
    $taux= 0.50;
}

elseif($monAge<16)
{
    $taux = .75;
}

else{
    $taux = 1;
}

$resultat = $prix*$taux;

echo "Le semain est $resultat €";





?>