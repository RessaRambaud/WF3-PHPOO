<?php
use Model\Abonne;

require_once 'autoload.php';

//contient un tableau d'objets abonée
$abonnes=[];
include 'layout/Top.php';

?>
<h1>Gestion abonnés</h1>
<a class="btn btn-outline-primary mb-3" href="abonne-edit.php">Ajouter un abonné</a>
<table class="table">
        <tr>
            <th>Id</th>
            <th>Prenom</th>
            <th width="250px"></th>
        </tr>
    <?php

    foreach($abonnes as $abonne) :
    ?>
    <tr>

        <td><?= $abonne->setIdAbonne() ?></td>
        <td><?= $abonne->getPrenom() ?></td>
        <td>
            <a class="btn btn-primary" href="abonne-edit.php?$id_abonne=<? $abonne->getIdAbonne() ?>">Modifier</a>
        </td>
        <td>
            <a class="btn btn-primary" href="abonne-edit.php?$id_abonne=<? $abonne->getIdAbonne() ?>">Suppreimer</a>
        </td>
    </tr>
    <?php
         endforeach;
    ?>

</table>
<?php
include 'layout/bottom.php';
?>
