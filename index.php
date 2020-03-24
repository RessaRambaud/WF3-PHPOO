<?php
class Utilisateur //NOM DE CLASS MAJUSCULE first letter
{

    /**
     * un commentaire de documentation( avec /**)
     *
     * Attribut(ou properties) de la classe (=variable interne)
     * un tag pour préciser le type de la variable et événement sa declaration
     *  @var string Le prenom de l'utilisateur //indication that expects the string
     * 
     */
        public $prenom='Ressa';
    
    /** 
     * 
     * Un attribute sans valeur par default(=null)
     * 
     * @var string|null
     * 
    */
        public $nom;
        /**
         * un attribute privé
         * 
         * @var string
         */
     private $age=20;

        /**
         * Une methode - une function interne à la classe 
         * 
         * @return string 
         * 
         */
        public function nomComplet()
        {
            //$this dans une methode fait reference à l'object qui appel la methode.
            return rtrim($this->prenom.' ' .$this->nom);
        }
        /**
         * 
         * @return string
         */
        public function infos()
        {
                //on ne peut accéder à attribute age qu'à l'interieur des methodes.
                return $this->nomComplet().','.$this->age.'ans';
              
               
        }
        //Excercise : ecrire une methode qui fait vieillir l'utilisateur d'un an 
        /**
         * @return null
         * 
         */
        public function anniversaire()
        {
                      
            $this->age++;
       }
      
     

 }

 //instanciation de la class= création un object à partir de la classe
 $moi=new Utilisateur();

 echo $moi->prenom; //without $ in front : like moi.prenom in java
$toi = new Utilisateur();

//affectation d'une valeur à l'attribute prenom de l'object
$toi->prenom ='Benina';
echo '<br>'.$moi->prenom; //Ressa
echo '<br>'.$toi->prenom; //Benina 

//on ne peut pas faire un echo sur un object 
//echo $moi; //fatal error

var_dump($moi->nom); //null
$toi->nom ='Rambaud';

echo '<br>'.$toi->nomComplet();
//echo $moi->age; //error cos we cant access attribute private from an object utilistaeur.
echo '<br>'.$toi->infos(); //20
$toi->anniversaire();
echo '<br>'.$toi->infos(); //21

var_dump($toi);

//creation d'un attribut à la volée (runtime)
//A éviter , si on a besoin d'un nouvel attribut , on l'ajoute à la classe
$toi ->adresse ='rue henri thirard';
var_dump($toi);

$array=['pseudo'=>'Beni','email'=>'beni@gmail.com'];
//conversion du tableau en object 
//l'object appartient à la classe de basse en php : stdclass
$obj=(object)$array; //will change the array into object , can use other data types also : type conversion

var_dump($obj);

//erreur : array to string conversion
//str - (string)$array;

//

$lui = new stdClass();
$lui->nomComplet='Ressa Rambaud'; //it creates a variable nomcomplet like adresse above

var_dump($lui);
//retourne la classe à laquelle appartient un objet
echo get_class($moi); //Utilisateur
echo get_class($toi); //test Git Hub
echo get_class($moi);