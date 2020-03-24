<?php
require_once 'Personne.php';

$pierre=new Personne();

//on passe par le setter pour affecter une valeur à l'attribut
$pierre->setPrenom('Pierre');

//fatal error ;l'attribut est privé
//$pierre->prenom = 'pierre';

//on passe par le getter pour affecter une valeur à l'attribut
echo $pierre->getPrenom();

$pierre->setPrenom('1234');
echo '<br>'.$pierre->getPrenom();

$paul = new Personne();
//appel chainé aux setters : possible grace aux return $this dans les setters
//=interface fluid (fluent setters)
$paul 
    ->setPrenom('Paul')
    ->setNom('Bismith')
    ;

    //au lieu de  :

    // $paul->setPrenom('paul');
    // $paul->setNom('Bismuth');
