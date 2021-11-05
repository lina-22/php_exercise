<?php
$nb1 = 9;
$utilisateur1 = 200;

$nb2 = 7;
$utilisateur2 = 500;
$resultat;
$programme; 

if($utilisateur1 <= 200)
{
    $resultat = $utilisateur1*$nb1;
}
elseif($utilisateur1>200){
    $resultat = $utilisateur2/$nb2;
}

else {
    $resultat = $utilisateur2-$utilisateur1;
}

echo "resultat de la calculatrice est $resultat"; 

?>