<?php
class Commande
{
    /**
     * Get the value of status
     * 
     * @return string
     * 
     */
    private $status='en cours';
    /**
     * 
     * @var array()
     */

    public static $acceptedStatuses =[
        'en cours',
        'envoyée',
        'annulée',
        'livrée'

    ];
   private static $nbCommandes=0;

   public function __construct()
   {
       self::$nbCommandes++;
   }

    /**
     * Get get the value of status
     */ 
    public function getStatus():string 
    {
        return $this->status;
    }

    /**
     * Set get the value of status
     *
     * @return  self
     */ 
    public function setStatus(string $status):self
    {
        //on accède un attribut statique avec la classe ::nomDeAttribut
        if(!in_array($status,self::$acceptedStatuses))
        {
            trigger_error('status inconnu',E_USER_WARNING);
        }
        $this->status = $status;

        return $this;
    }

   /**
    * Get the value of nbCommandes
    * @return int
    */ 
   public static function getNbCommandes()
   {
      return self::$nbCommandes;
   }
   public static function displayStatus()
   {
       //fatal error : $this n'a pas de sens dans une méthode statique
       //car $this fait référence à l'objet qui appele la méthode
       //et une méthode statique est une méthode de la classe elle-même
       echo 'statut :'.$this->status;
   }
}