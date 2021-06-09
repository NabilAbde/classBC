<?php
/**
 * Categories
 */
class Categories
{
    public $Nom;
    public $Description;
    public $Image;
    public $Id_parent;



    public function __construct($name, $description, $images, $idP)
    {
        $this->Nom = $name;
        $this->Prenom = $description;
        $this->Image = $images;
        $this->Id_parent = $idP;
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


    public function ListCat($mail, $password)
    {
    }
    public function CatById()
    {
    }

    public function Status($password)
    {
    }
}
