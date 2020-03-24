<?php
require_once 'Chat.php';

/**
 * Une classe déclarée finale ne peut pas être surchargée 
 * 
 */
final class Siamois extends Chat
{

/****
 * La methode ne peut pas être surchargée  car declarée  finale dans chat
 * 
  public function ronronner()  :void
  {
      echo 'Ronronron';
  }
  */

  public function decrire():string
  {
      //l'attribut privé couleur déclaré dans Chat n'est pas accessible  à ses classes filles
        //return 'Un chat de couleur :'.$this ->couleur;
          //so,
    //on passe par les getters and setters pour accéder à l'attribut          
    return 'Un chat de couleur '.$this ->getCouleur();

  
  }
}
