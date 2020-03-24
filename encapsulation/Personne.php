<?php
class Personne
{
    /**
     * @var string
     * 
     */
    private $prenom;
    private $nom;
    /**
     * Getter de l'attribut prenom:
     * retourne la valeur de l'attribut
     * 
     * 
     */

    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * Setter  de l'attribut prenom:permet de modifier la valeur  de l'attribut
     * 
     * @param string $value  
     */
    public function setPrenom($value)
    {
        /**
         * A ctype_digit() function in PHP used to check each and every character of text are numeric or not. 
         * It returns TRUE if all characters of the string are numeric otherwise return FALSE.
         *  
         */
        if(ctype_digit($value))
        {
                trigger_error("Un nombre n\'est pas un prénom",E_USER_WARNING);
                //return pour arrêter l'execution  de la méthode.

                return;
        }
         $this->prenom=$value;
         return $this; //fluent setters
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}