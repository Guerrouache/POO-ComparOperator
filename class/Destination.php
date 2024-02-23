<?php



class Destination
{

    private $id;
    private $location;
    private $price;
    private $id_tour_operator;
    private $database;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->location = $data['location'];
        $this->price = $data['price'];
        $this->id_tour_operator = $data['tour_operator_id'];
    }



    //tout les setters

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setIdTourOperator($id_tour_operator)
    {
        $this->id_tour_operator = $id_tour_operator;
    }



    //tout les getter


    public function getId()
    {
        return $this->id;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getIdTourOperator()
    {
        return $this->id_tour_operator;
    }



}
