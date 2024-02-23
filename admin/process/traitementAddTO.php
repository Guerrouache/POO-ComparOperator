<?php
include "../../config/db.php";
include "../../config/autoload.php";


if (isset($_POST['name']) && isset($_POST['link'])){

    $tourOperateurManager = new TouroperatorManager($database);
    $tourOperateur = new Touroperator([
        'name' => $_POST['name'] , 
        'link' => $_POST['link'] , 
        'isPremium' => $_POST['is_premium'] , 
        'gradeTotal' => $_POST['grade'] ,
    ]);
    
    if ($tourOperateurManager-> operatorExist($tourOperateur) === true){
    $tourOperateurManager->createTourOperator($tourOperateur);

    header('Location:../list_TourOperator.php?message=L\'opérateur a été crée.');

    }else{

    header('Location:../create_tour_ope.php?message=L\'opérateur existe deja.');

    }
    
} else{

    header('Location:../create_Tour_Operator.php?message=Remplissez les champs.');

}

?>