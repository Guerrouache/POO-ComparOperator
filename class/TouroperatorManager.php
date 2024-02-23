<?php
class TouroperatorManager
{

  private $bdd;

  public function __construct($db)
  {
    $this->setDb($db);
  }

  public function setDb(PDO $db)
  {
    $this->bdd = $db;
  }


  public function getOperatorByDestination($id)
  {

    $q = $this->bdd->prepare('SELECT * FROM tour_operator WHERE id = ?');
    $q->execute([$id]);
    $operator = $q->fetch(PDO::FETCH_ASSOC);

    return new Touroperator($operator);
  }


  public function getAllOperator()
  {
    $allOperator = [];
    $q = $this->bdd->prepare('SELECT * FROM tour_operator');
    $q->execute();
    $donnees = $q->fetchAll(PDO::FETCH_ASSOC);

    foreach ($donnees as $donnee) {
      $allOperator[] = new Touroperator($donnee);
    }
    return $allOperator;
  }

  public function operatorExist($operator)
  {
    $CharacterStatement = $this->bdd->prepare("SELECT COUNT(*) FROM tour_operator WHERE name = ?");
    $CharacterStatement->execute([
      $operator->getName()
    ]);
    $result = empty($CharacterStatement->fetchColumn());
    return (bool) $result;
  }

  public function updateOperatorToPremium(Touroperator $tourOperator)
  {
    $updatePremium = $this->bdd->prepare('UPDATE tour_operator SET is_premium = :is_premium WHERE id = :id');
    $updatePremium->bindValue(':is_premium', $tourOperator->getIspremium());
    $updatePremium->bindValue(':id', $tourOperator->getId());

    $updatePremium->execute();
  }


  public function getOperatorById($param)
  {

    if (is_int($param)) {
      $CharacterStatement = $this->bdd->prepare('SELECT * FROM tour_operator WHERE id = :id');
      $CharacterStatement->bindValue(':id', $param, PDO::PARAM_INT);
      $CharacterStatement->execute();
      $operatorArray = $CharacterStatement->fetch(PDO::FETCH_ASSOC);

      return $operatorArray;
    }
  }

  public function createTourOperator(Touroperator $tourOperator)
  {
    $q = $this->bdd->prepare('INSERT INTO tour_operator (name, link, grade_total, is_premium) VALUES(:name, :link, :grade_total, :is_premium)');
    $q->bindValue(':name', $tourOperator->getName());
    $q->bindValue(':grade_total', $tourOperator->getGradeTotal());
    $q->bindValue(':link', $tourOperator->getLink());
    $q->bindValue(':is_premium', $tourOperator->getIsPremium());
    $q->execute();
  }

  public function updateTO(Touroperator $operator)
  {
    $updateTO = $this->bdd->prepare('UPDATE tour_operator SET name= :name, grade= :grade_count, link=:link, is_premium = :is_premium,WHERE id=:id');

    $updateTO->bindValue("is_premium", $operator->getIsPremium());
    $updateTO->bindValue("link", $operator->getLink(), PDO::PARAM_STR);
    $updateTO->bindValue("name", $operator->getName(), PDO::PARAM_STR);
    $updateTO->bindValue("id", $operator->getId(), PDO::PARAM_INT);
    $updateTO->execute();
  }

  public function deleteTo(Touroperator $operator)
  {

    $deleteTo = $this->bdd->prepare('DELETE FROM tour_operator WHERE id = :id');
    $deleteTo->bindValue(':id', $operator->getId(), PDO::PARAM_INT);
    $deleteTo->execute();
  }

  public function updateGradeByOperator(Touroperator $tourOperator)
  {
    $updateGrade = $this->bdd->prepare('UPDATE tour_operator SET grade = :grade WHERE id = :id');
    $updateGrade->bindValue(':grade', $tourOperator->getGradeCount());
    $updateGrade->bindValue(':id', $tourOperator->getId());

    $updateGrade->execute();
  }
}
