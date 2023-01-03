<?php

class Chambre
{
    private Hotel $_hotel;
    private int $_chambre;
    private int $_prix;
    private bool $_wifi;
    private string $_etat;
}

public function __construct(Hotel $hotel, int $chambre, int $prix, bool $wifi, string $etat)
{
    $this->_hotel = $hotel;
    $this->_chambre = $chambre;
    $this->_prix = $prix;
    $this->_wifi = $wifi;
    $this->_etat = $etat;
}

public function getHotel()
{
    return $this->_hotel;
}

public function getChambre()
{
    return $this->_chambre;

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
        /*Affichage info Chambre*/
public function __toString()
{
    return $this->getHotel().$this->getChambre().$this->getPrix().$this->getWifi().$this->getEtat()."<br>";
}