<?php
require_once 'Article.php';
//erreur : le paramètre $titre est obligatoire dans le constructeur 
//$article=new Article();

$article =new Article('Un virus , ah bon?');
echo $article->getTitre();

$article2 = new Article('ou sont les pâtes?','Regina');
var_dump($article,$article2);

//affichage ce que retourne la __tostring
echo $article2;
echo '<br>'.$article->getDatePublication()->format('d/m/Y');



