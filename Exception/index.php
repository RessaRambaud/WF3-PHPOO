<?php
require_once 'autoload.php';
try
{
     //throw pour jeter une exception(=erreur)
    throw new Exception('Une erreur est survenue');

    //le code dans le bloc try après une exception a été jété
     //n'est pas exécuté
    echo 'Ici';

}
catch(Exception $e)
{
    echo $e->getMessage();
}
echo '<br>';
try
{
    $user =new User();
    $user->setFirstname('123');

}
catch(Exception $e)
{
    echo 'Une erreur est survenue';
  //  echo $e->getMessage();
    Logger::log($e);
}
echo '<br>';
try
    {
        $user=new User();
        $user->setLastname('123');

    }
    catch(InvalidArgumentException $e)
    {
        echo "Erreur d'argument ";
        Logger::log($e);
    }
echo '<br>';
try
{
    $user= new User();
    $user->setBithdate('2000-01-01');
    //Throwable est l'interface qu'implementent à la fois Exception et error
}
catch(Error $e)
{
    echo 'Une erreur est survenue ';
    Logger::log($e);
}
echo '<br>';
try
{
    $user= new User();
    $user->setBithdate('2000-01-01');
    //Throwable est l'interface qu'implementent à la fois Exception et error
}
catch(Throwable $e)
{
    echo 'Une erreur est survenue ';
    Logger::log($e);
}