<?php 

include "../config/db.php";
include "../config/autoload.php";
include "../Headeur/headeurAdmin.php";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



<div class="AjoutTourOp">
   
    <div class="formAddTour"> 
        <h2>Ajout de Tour Operateur</h2>
        <form action="./process/traitementAddTO.php" method="POST" enctype="multipart/form-data">
            <label>Nom</label><br>
            <input type="text" name="name" placeholder="name"><br>
            <label>Note</label><br>
            <input type="number" min="0" max="5" name="grade" placeholder="/5"><br>
            <label>Lien</label><br>
            <input type="text" name="link" placeholder="Lien"><br>
                <input type="checkbox" id="scales" value="1" name="is_premium"
                checked>
                <label for="scales">Premium</label><br>
                <input type="checkbox" id="horns" value="0" name="is_premium">
                <label for="horns">No Premium</label><br>
               
                <button type="submit">Ajout</button>
        </form>
    </div>
</div>
    
</body>
</html>

