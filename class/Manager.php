<?php


class Manager
{

    private $bdd;


    function __construct($bdd)
    {
        $this->bdd = $bdd;
    }

    function getAllDestination()
    {
    }


    function getOperatorByDestination()
    {
    }


    function createReview($data)
    {
        $req = $this->bdd->prepare('INSERT INTO review(location, price, tourOperatorId) VALUES(:location, :price, :tourOperatorId)');
        $req->execute(array(
            'location' => $data['location'],
            'price' => $data['price'],
            'tourOperatorId' => $data['tourOperatorId']
        ));
    }

    function getReviewByOperatorId()
    {
        
    }

    function getAllOperator()
    {

    }

    function updateOperatorToPremium()
    {

    }


    function createTourOperator()
    {

    }


    function createDestination()
    {

    }
}
