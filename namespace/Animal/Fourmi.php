<?php


namespace Animal;
use Animal\Continent as Monde;
class Fourmi
{
    public function voirElephantAfrique()
    {
        //Animal\continent \Afrique\Elephant:
        //nom de la classe relativement au namespace  dans lequel on se trouve
        $elephant= new Continent\Afrique\Elephant();
        echo ' Je vois un elephant avec de '.$elephant->getTailleOreilles(). 'Oreilles';

    }
    pulic function voirElephant(string $continent)
    {
        if($continent =='afrique')
        {
            $elephant=new Monde\Afrique\Elephant();
        }
        elseif($continent =='asie')
        {
            $elephant=new Monde\Asie\Elephant();
        }
        if(isset($elephant))
        {
            echo ' Je vois un elephant avec de '.$elephant->getTailleOreilles(). ' Oreilles';
        }
        else
        {
            echo " il n'y a pas de elephant ou je trouve";
        }
    }
}