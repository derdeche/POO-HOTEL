<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private string $_ville;
    private string $_etoiles;
    private int $_nbChambre;
    private int $_chReservees;
    private int $_chDispo;
    private array $_reservations;
    private array $_chambres;


public function __construct(string $nom, string $adresse, string $ville, string $etoiles, int $nbChambre, int $chReservees, int $chDispo)
{
    $this->_nom = $nom;
    $this->_adresse = $adresse;
    $this->_ville = $ville;
    $this->_etoiles = $etoiles;
    $this->_nbChambre = $nbChambre;
    $this->_chReservees = $chReservees;
    $this->_chDispo = $chDispo;
    $this->_reservations = [];
    $this->_chambres = [];
}

public function addReservation( $reservation)
{
    $this->_reservations[] = $reservation;
}

public function addChambre($chambre)
{
    $this->_chambres[] = $chambre;
}


public function getNom()
{
    return $this->_nom;
}


public function getAdresse()
{
    return $this->_adresse;
}


public function getVille()
{
    return $this->_ville;
}


public function getEtoiles()
{
    return $this->_etoiles;
}


public function getNbChambre()
{
    return $this->_nbChambre;
}


public function getChReservees()
{
    return $this->_chReservees;
}


public function getChDispo()
{
    return $this->_chDispo;
}
            /*Affichage info Hotel*/
            

public function afficherHotel()
{
    echo "L'hotel"." ".$this->getNom()." ".$this->getEtoiles()." ".$this->getVille()."<br>". $this->getAdresse()." ".$this->getVille()."<br>"."Nombre de chambres : ".$this->getNbChambre()."<br>"."Nombre de chambres réservées : ".$this->getChReservees()."<br>"."Nombre de chambres dispo : ".$this->getChDispo()."<br>";
}


public function __toString()
{
    return  $this->getNom()." ".$this->getEtoiles()." ".$this->getVille()."<br>";
}

public function afficherReservationHotel()
{
    echo " Réservations de l'hotel ". $this;
    foreach( $this->_reservations as $reservation)
    {
       echo $reservation;
    }

}
 




}