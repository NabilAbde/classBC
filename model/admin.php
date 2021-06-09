<?php
include_once("model/personne.php");
class Admin extends Personne
{
    public $Adresse;
    public $DatedeNaissance;



    public function __construct($name, $firstname, $mail, $password, $Adress, $DateBirth)
    {
        $this->Nom = $name;
        $this->Prenom = $firstname;
        $this->Email = $mail;
        $this->Motdepasse = $password;
        $this->Adresse->$Adress;
        $this->DatedeNaissance->$DateBirth;
    }
    public function Connecter()
    {
    }
    public function Deconnecter()
    {
    }
    public function Modifier($password)
    {
    }
    public function Ajouter()
    {
    }
}
