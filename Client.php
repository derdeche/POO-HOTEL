<?php

class Client
{
    private string $_nom;
    private string $_prenom;
    private array $_reservation;
    private array $_chambres;


public function __construct(string $nom, string $prenom)
{
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_reservations = [];
    $this->_chambres = [];
}

public function getNom()
{
    return $this->_nom;
}

public function getPrenom()
{
    return $this->_prenom;
}

public function addReservation( $reservation)
{
    $this->reservations[] = $reservation;
}

public function addChambre($chambre)
{
    $this->_chambres[] = $chambre;
}

            /*Affichage info Client*/ 
            

public function __toString()
{
    return $this->getNom()." ".$this->getPrenom().$this->_entree->getEntree();
}

public function afficherReservationClient()
{
    echo "Réservations de :" .$this->getNom()." ".$this->getPrenom();

    
    foreach( $this->_reservations as $reservation)
    {
       
       echo $reservation;
    }
}
}
