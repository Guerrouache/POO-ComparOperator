<?php
class DestinationManager {

    private $bdd;

    public function __construct($db)
    {
      $this->setDb($db);
    }

    public function setDb(PDO $db){
      $this->bdd = $db;
    }
  
  public function getAllDestination(){
     $allDestination = [];
      $q= $this->bdd->prepare('SELECT * FROM destination');
      $q -> execute();
      $donnees = $q -> fetchAll(PDO::FETCH_ASSOC);

      foreach ($donnees as $donnee){
        $allDestination[] = new Destination($donnee);
      }
      return $allDestination;
  }

  public function getDestinationByName(string $name){
    $allDestination = [];

    $q = $this->bdd->prepare(
      'SELECT *
        FROM destination 
        WHERE location = ?');
    $q->execute([$name]);
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
 
    foreach ($donnees as $donnee){
      $allDestination[] = new Destination($donnee);

    }

    return $allDestination;

  }

  public function getDestinationByIdTo($id){
    $allDestination = [];

    $q = $this->bdd->prepare(
      'SELECT * FROM destination
        WHERE id_tour_operator = ?');
    $q->execute([$id]);
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);
 
    foreach ($donnees as $donnee){
      $allDestination[] = new Destination($donnee);

    }

    return $allDestination;

  }

  public function deleteDestination(Destination $destination){

    $deleteTo = $this->bdd->prepare('DELETE FROM destination WHERE id = :id');
    $deleteTo->bindValue(':id', $destination->getId(), PDO::PARAM_INT);
    $deleteTo->execute();
  }
  

  public function createDestination(Destination $destination){ 
    $q = $this->bdd->prepare('INSERT INTO destination (location , price, tour_operator_id) VALUE (:location, :price, :tour_operator_id )');
    $q->bindValue(':location', $destination->getLocation());
    $q->bindValue(':price', $destination->getPrice());
    $q->bindValue(':tour_operator_id ', $destination->getIdTourOperator());
    $q->execute();

   
  }
}

?>