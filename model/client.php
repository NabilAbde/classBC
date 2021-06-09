<?php
include_once("model/personne.php");
class Client extends Personne
{
    public $Adresse;
    public $DatedeNaissance;



    public function __construct($Name, $firstname, $mail, $password, $Adress, $DateBirth)
    {
        $this->Nom = $Name;
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
    public function getModifier($password)
    {
    }
    public function getAjouter()
    {
    }
}
