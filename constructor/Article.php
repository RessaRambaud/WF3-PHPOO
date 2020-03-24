<?php
class Article
{
    /**
     * @var string
     * 
     */
    private $titre;
    /**
     * 
     */
    private $auteur;
    /**
     * @return DateTime
     */
    private $datePublication; 
    //impossible de donner une valeur par default à un attributqui contient un object 
       // $datePublication= new DateTime();
    /**
     * Constructeur de la classe
     * Cette méthode , si elle est présente , est appelée automatiquement
     * à l'instanciation de la clasee
     * 
     * Le paramètre $titre est obligatoire(pas de valeur par )
     */
    public function __construct(string $titre,?string $auteur=null)
    {
        $this
        ->setTitre($titre)
        ->setAuteur($auteur)
        //pour affecter une valeur par default à un attributqui contient un object 
        ->setDatePublication(new DateTime())
        ;
    }

    /**
     * Methode magique appelée automatiquement quand on utilise un objet comme une chaine  de caractere.
     * par exemple un echo dessus
     */
    public function __tostring()
    {
        return $this->titre;
    }
    /**
     * Get the value of titre
     * @return string
     */
    

    /**
     * Get the value of titre
     *
     * @return  string
     */ 
    public function getTitre():?string
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @param  string  $titre
     *
     * @return  self
     */ 
    public function setTitre(string $titre):self
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of auteur
     */ 
    public function getAuteur():?string
    {
        return $this->auteur;
    }

    /**
     * Set the value of auteur
     *
     * @return  self
     */ 
    public function setAuteur(?string $auteur):self
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get the value of datePublication
     */ 
    public function getDatePublication() :DateTime
    {
        return $this->datePublication;
    }

    /**
     * Set the value of datePublication
     *
     * @return  self
     */ 
    public function setDatePublication(DateTime $datePublication):self
    {
        $this->datePublication = $datePublication;

        return $this;
    }
}