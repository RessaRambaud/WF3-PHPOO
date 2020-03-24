<?php
require_once 'Animal.php';
/**
 * 
 * La classe chien hérite d'Animal
 */
class Chien extends Animal
{
     /**
         * Implémentation de la méthode abstraite crier définie  dans Animal
         * = sa définition concrète
         * 
         */
        public function crier():string
        {
            return 'Ouaf Ouaf';
        }
        public function mangerSucre()
        {
            echo 'yummy yum !';
        }
}