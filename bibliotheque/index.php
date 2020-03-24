<?php
use App\Cnx;
require_once 'autoload.php';
//pour avoir une intance unique de PDO:
$pdo=Cnx::getInstance();

include 'layout/Top.php';
?>
<h1>Acceuil</h1>
<?php
include 'layout/bottom.php';


?>
