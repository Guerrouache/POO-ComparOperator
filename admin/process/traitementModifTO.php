<?php
include "../../config/autoload.php";
include "../../config/db.php";


if (isset($_POST['is_premium'])){

    $tourOperateurManager = new TouroperatorManager($pdo);
    $tourOperateur = new Touroperator(([
        'id'=>intval($_POST['id_tour_operator']),
        'name'=>$_POST['name'],
        'gradeTotal'=>$_POST['gradeTotal'],
        'link'=>$_POST['link'],
        'is_premium' => intval($_POST['is_premium']),
        ]));

    if ($tourOperateurManager-> operatorExist($tourOperateur) === true){
    $tourOperateurManager->updateTO($tourOperateur);

    header('Location:../list_TourOperator.php?message=L\'opérateur a bien été modifié.');

    }

}else{
    header('Location:../list_TourOperator.php?message=Remplissez les champs.');

}

?>