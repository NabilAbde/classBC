<?php

/**
 * Creation de la classe Personne
 */
class Personne
{
    /**
     * @var $Nom
     * @var $Prenom
     * @var $Email
     * @var $Motdepasse
     */
    public string $Nom;
    public $Prenom;
    public $Email;
    public $Motdepasse;



    /**
     * Method __construct
     *
     * @param string $name correspond au nom de l'utilisateur
     * @param string $firstname correspond au prenom de l'utilisateur
     * @param $mail $mail [explicite description]
     * @param $password $password [explicite description]
     *
     * @return void =type de retour attendu (void =  ne retourne rien) (boolean, string, valeur...)
     */
    public function __construct($name, $firstname, $mail, $password)
    {
        $this->Nom = $name;
        $this->Prenom = $firstname;
        $this->Email = $mail;
        $this->Motdepasse = $password;
    }


    public function connecter()
    {
    }
    public function deconnecter()
    {
    }
    public function modifierPassword($password)
    {
    }
}
