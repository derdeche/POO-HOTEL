<?php

class Chambre
{
    private Hotel $_hotel;
    private int $_numChambre;
    private int $_prix;
    private string $_wifi;
    private string $_etat;
    private array $_reservations;
    private int $_nbLit; 


public function __construct(hotel $hotel, int $numChambre, int $prix, string $wifi, string $etat,int $nbLit)
{
    $this->_hotel = $hotel;
    $this->_numChambre = $numChambre;
    $this->_prix = $prix;
    $this->_wifi = $wifi;
    $this->_etat = $etat;
    $this->_nbLit = $nbLit;
    $this->_hotel->addChambre($this);
   

}

public function getHotel()
{
    return $this->_hotel;
}

public function getNumChambre()
{
    return $this->_numChambre;

}

public function getPrix()
{
    return $this->_prix;
}

public function getWifi()
{
    return $this->_wifi;
}

public function getEtat()
{
    return $this->_etat;

}

public function getNbLit()
{
    return $this->_nbLit;
}
        /*Affichage info Chambre*/
public function __toString()
{
    return $this->getHotel()."Numéro de la chambre : ".$this->getNumChambre()."<br> " ."Tarif par Nuit: ".$this->getPrix()."<br>"."Wifi : ".$this->getWifi()."<br>"."Etat : ". $this->getEtat()."<br>"." Nombre de lits :". $this->getNbLit()."<br>";
}

}