<?php
require_once 'autoload.php';
$member = new member();
//appel de la méthode venant  du trait StringUtils
echo $member->asParagraph('Bonjour','green');
$member->setFirstname('Julien');
$member->displayFirstname('blue');
