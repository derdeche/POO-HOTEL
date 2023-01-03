<?php

class Hotel
{
    private string $nom;
    private string $adresse;
    private string $ville;
    private string $etoiles;
    private int $nbChambre;
    private int $chReservees;
    private int $chDispo;


public function __construct(string $nom, string $adresse, string $ville, string $etoiles, int $nbChambre, int $chReservees, int $chDispo)
{
    $this->nom = $nom;
    $this->adresse = $adresse;
    $this->ville = $ville;
    $this->etoiles = $etoiles;
    $this->nbChambre = $nbChambre;
    $this->chReservees = $chReservees;
    $this->chDispo = $chDispo;
}

public function getNom()
{
    return $this->nom;
}


public function getAdresse()
{
    return $this->adresse;
}


public function getVille()
{
    return $this->ville;
}


public function getEtoiles()
{
    return $this->etoiles;
}


public function getNbChambre()
{
    return $this->nbChambre;
}


public function getChReservees()
{
    return $this->chReservees;
}


public function getChDispo()
{
    return $this->chDispo;
}

public function __toString()
{
    echo $this->getNom()." ".$this->getEtoiles()." ".$this->getVille()."<br>";
    echo $this->getAdresse()." ".$this->getVille()."<br>";
    echo "Nombre de chambres : ".$this->getNbChambre()."<br>";
    echo "Nombre de chambres réservées : ".$this->getChReservees()."<br>";
    echo "Nombre de chambres dispo : ".$this->getChDispo()."<br>";
}


















}
