<?php


namespace Animal\Continent\Afrique;


class Gazelle
{
    public function voirElephant()
    {
        //Animal\Continent\Afrique\Elephant
        //car sans utiliser le om complet  de la classe et sans use.
        //la classe est celle qui se trouve  dans le namespace dans le quelle on est
        $elephant=new Elephant();
        echo 'je vois un elephant avec de '.$elephant->getTailleOreilles().' oreilles';
    }
    public function etreVue()
    {
        /**
         * l'antislash initial :backslash
         * La classe Touriste n'a pas de namespace , sans  cet antislash
         * la classe attendue serait Animal\Continent\Afrique\Touriste
         */

        $touriste = new \Touriste();
        $touriste->voirGazelle();
    }
}