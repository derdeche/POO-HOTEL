<?php

class Client
{
    private string $_nom;
    private string $_prenom;
    private array $_reservations;


public function __construct(string $nom, string $prenom)
{
    $this->_nom = $nom;
    $this->_prenom = $prenom;
    $this->_reservations = [];
}

public function getNom()
{
    return $this->_nom;
}

public function getPrenom()
{
    return $this->_prenom;
}

public function addReservation(array $reservation)
{
    $this->reservations[] = $reservation;
}

            /*Affichage info Client*/ 
            

public function __toString()
{
    return $this->getNom()." ".$this->getPrenom();
}
}
