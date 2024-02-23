<?php

try{

    $dsn = 'mysql:host=localhost;dbname=tour_operateur;';
    
    $username = 'root';
    $password = ''; 
    
    $database = new PDO($dsn, $username, $password);
}

catch(Exception $message){

    echo "probleme <br>". $message;
}
