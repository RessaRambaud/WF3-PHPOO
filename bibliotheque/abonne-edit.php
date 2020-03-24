<?php
use Model\Abonne;

require_once 'autoload.php';
$errors=[];
/**
 * adapter la page pour la faire fonctionner en modification quand on reçoit un id GET
 * - ajouter une méthode statique find( à la classe Abonne qui prend un id en parametere
 * qui retourne un objet Abonne à partir d'une requette sql
 * -modifier la méthode save() pour qu'elle fasse  un update si l'abonne a un id
 */
if(isset($_FET['id']))
{
    //modification
    $abonne=Abonne::find($_GET['id_abonne']);

}
else
{
    $abonne=new Abonne();
}
$abonne=new Abonne();
if(!empty($_POST))
{
    $abonne->setPrenom($_POST['prenom']);

    if($abonne->validate($errors))
    {
        $abonne->save();
        FlashMessage::set("L'abonne est enregistré");
        header('Location :abonnes.php');
        die;

    }

}
include 'layout/Top.php';
?>
<h1>Edition  abonnés</h1>
<?php
    if(!empty($errors)):
?>
    <div class="alert alert-danger">
        <strong>Le formulaire contient des erreurs </strong>
        <?=implode('<br>',$errors) ?>

    </div>
<?php
endif;
?>
<form method="post">
    <div class="form-group">
        <label>Prénom</label>
        <input type="text" name="prenom" class="form-control">
    </div>
    <div class="text-right">
        <button class="btn btn-primary" type="submit">Enregistrer</button>
        <a href="abonnes.php" class="btn btn-secondary">Retour</a>
    </div>

</form>
<?php
include 'layout/bottom.php';
?>

