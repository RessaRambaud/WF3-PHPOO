<?php
class Humain
{
    /**
     * Parce que le parametre est type sur la classe chien
     * Je suis dûr de pouvoir applere la méthode 
     * @param Chien $chien
     */
    public function donnerSucre(Chien $chien)
    {
            $chien->mangerSucre();
    }
    /**
     * $animal doit être un objet instance d'une  qui herite d'Animal
     * Comme la méthode crier est définie en méthode abstraite  dans animal
     * un objet instance d'une classe qui en hérite 
     * @param Animal $animal
     */
    public function caresser(Animal $animal)
    {
        $animal->crier();
    }

}