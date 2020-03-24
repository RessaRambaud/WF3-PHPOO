<?php
require_once 'Cube.php';

/**
 * class De
 * Une classe peut à la fois hériter d'une  autre classe
 * et implementer une ou plusieurs
 */
class De extends Cube implements Texture
{
    /*
     * @var string
     * **/
    private $matiere;
    /*
     * @var string
     * **/
    private $couleur;

    public function __construct($matiere,$couleur)
    {
        $this
            ->setMatiere($matiere)
            ->setCouleur($couleur)
            ;

    }

    /**
     * @return string
     */
    public function getMatiere():string
    {
        return $this->matiere;
    }

    /**
     * @param mixed $matiere
     * @return De
     */
    public function setMatiere(string $matiere):De
    {
        $this->matiere = $matiere;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCouleur():string
    {
        return $this->couleur;
    }

    /**
     * @param mixed $couleur
     * @return De
     */
    public function setCouleur(string $couleur):De
    {
        $this->couleur = $couleur;
        return $this;
    }

}