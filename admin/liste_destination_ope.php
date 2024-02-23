<?php

include '../config/autoload.php';
include '../config/db.php';
include '../Headeur/headeurAdmin.php';


$destinationManager = new DestinationManager($database);
$toManager = new TouroperatorManager($database);

?>

<h2>Liste des destinations</h2>
<?php
 $allDestination = $destinationManager->getAllDestination();
 foreach ($allDestination as $destination) {

    $operator = new Touroperator($toManager->getOperatorById($destination->getIdTourOperator()));
 ?>
     <br>
     <div class="title">
        <h2><?= $destination->getLocation()?> - <?=$operator->getName()?><br><?= $destination->getPrice()?></h2>
       <!-- mettre l'image ici -->
     </div><br>


<form method="post" action="process/process_Delete_destination.php">
        <input type="hidden" name="id" value="<?=$destination->getId()?>">
        <button type="submit" name="" value="">Suppr</button>
</form>

<?php } ?>