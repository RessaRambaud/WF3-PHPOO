<?php
require_once 'Animal.php';
require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Humain.php';
require_once 'MaitreChien.php';
require_once 'Maitre.php';
require_once 'Siamois.php';
//La classe siamoisangora ne doit pas exister car elle hérite  d'une  classe déclarée finale
//require_once 'SiamoisAngora.php';

//impossible  d'instancier la classe Animal car  elle est declaré abstracte 
// $animal= new Animal();
// echo $animal->identifier();

$chat=new Chat();
$chien=new Chien();

//appel à la méthode identifier défine dans  Animal
//depuis des objects des classes qui en héritent

echo '<br>  '.$chien->identifier();
//resultat diférent car la méthode est surchargé
echo '<br> '.$chat->identifier();

//parceque Chat et Chien héritent d'Animal,
//elle implément forcement la methode crier
echo '<br> '.$chat->crier();
echo '<br> '.$chien->crier();


$humain=new Humain();
echo '<br>';
$humain->donnerSucre($chien);
//erreur à cause du typage du paramètre
//$humain->donnerSucre($chat);


echo '<br>';
echo $humain->caresser($chien);
echo '<br>';
echo $humain->caresser($chat);

//instanceof operator verifies that the variable is excatly the instance of the respective class
//eg : $chat is the instance of the class Chat
var_dump($chat instanceof Chat); //true
//par héritage un objet instance de chat est  aussi instance  d'Animal
var_dump($chat instanceof Animal); //true

$milou = new Chien();
$tintin = new MaitreChien($milou);

//pour faire aboyer milou :
echo $tintin->getChien()->crier();
//ou :
echo '<br>'.$tintin->caresserChien();

$garfield = new Chat();
$jon = new Maitre($garfield);

$zeus = new Chien();
$higgins = new Maitre($zeus);

echo '<br>'.$jon->caresserAnimal();
echo '<br>'.$higgins->caresserAnimal();

$siamois = new Siamois();

var_dump($siamois instanceof Siamois); //true
//par heritage :
var_dump($siamois instanceof Chat);
//paarce que Chat hérite d'Animal :
var_dump($siamois instanceof Animal);

echo '<br>'.$siamois->ronronner();
echo $siamois->decrire();

//erreur : un attribut protégé , comme un attribut privé
//n'est pas accessible depuis un objet
//echo $siamois->couleurYeux;

echo '<br> Des Yeux : '.$siamois->getCouleurYeux();



