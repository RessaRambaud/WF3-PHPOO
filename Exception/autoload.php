<?php
//cette fonction est appelée automatiquement au moment
//où on utilise une classe contenu dans un fichier qui n'a pas été inclus
spl_autoload_register(function ($classname)
{
      require_once __DIR__.DIRECTORY_SEPARATOR.str_replace('\\',DIRECTORY_SEPARATOR,$classname).'.php';
});