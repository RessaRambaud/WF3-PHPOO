<?php
require_once 'Config.php';
require_once 'Commande.php';
echo Config::RACINE_WEB;

echo '<br>'.Config ::getPath('proudit.php');

//fatal error,l'attribut est privée
//echo Commande::$nbCommandes;

echo '<br>'.Commande::getNbCommandes(); //0
$commande=new Commande();
echo '<br>'.Commande::getNbCommandes();//1
$commande2=new Commande();
echo '<br>'.Commande::getNbCommandes();//2
$commande =new Commande();

//warning ,cf la condition dans le setter 
$commande->setStatus('délivrée');

//on peut accéder aux attributes et  méthodes statique depuis
//un objet de la classe , mais on évite pour plus 

echo '<br>'.$commande::getNbCommandes();
//Excercise : faire une liste déroulante à partir de l'attribut  statique acceptedStatuses de commande
//COmmande ::displayStatus();


var_dump(Commande::$acceptedStatuses);
?>


<select name="status" id="status">
<?php
  
    foreach (Commande::$acceptedStatuses as $status):
    
?>
          
    <option value="<?= $status?>"> <?= ucfirst($status)?> </option>

<?php
   endforeach;
 
?>
</select>
    
        

