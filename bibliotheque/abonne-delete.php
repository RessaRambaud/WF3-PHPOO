<?php
use Model\Abonne;
require_once 'App/autoload.php';
$abonne= Abonne::find($_GET['id_bonne']);

//ajouter une méthode dans Abonne pour savoir si l'abonné a des emprunts
//supprimer s'il n'en a pas, renvoyer un message d'erreur sinon

$abonne->delete();
FlashMessage::set("L'abonée est supprimé");
header('Location : abonnes.php');



