<?php
class Produits
{
    public $Reference;
    public $Ean13;
    public $Nom;
    public $Description;
    public $Image;
    public $Prix;
    public $Stock;



    public function __construct($ref, $ean, $name, $description, $images, $price, $statutStock)
    {
        $this->Reference = $ref;
        $this->Ean13 = $ean;
        $this->Nom = $name;
        $this->Description = $description;
        $this->Image = $images;
        $this->Prix = $price;
        $this->Stock->$statutStock;
    }
    public function Ajouter()
    {
    }
    public function Modifier($password)
    {
    }
    public function Supprimer($password)
    {
    }


    public function ListProd()
    {
    }
    public function ProductById()
    {
    }

    public function Status($password)
    {
    }
}
