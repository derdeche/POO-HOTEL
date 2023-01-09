<?php

class Reservation
{
    private Client $_client;    
    private   $_entree;
    private   $_sortie;
    private Chambre $_chambre;
   


public function __construct(Client $client, $entree, $sortie, Chambre $chambre)
{
    $this->_client = $client;
    $this->_client->addReservation($this);
    $this->_entree = new DateTime ($entree);
    $this->_sortie = new dateTime ($sortie);
    $this->_chambre = $chambre;
    $this->_chambre->getHotel()->addReservation($this);
    
    
}

public function getClient()
    {
        return $this->_client;
    }

public function getEntree()
    {
        return $this->_entree;

    }

public function getSortie()
    {
        return $this->_sortie;
    }

public function getChambre()
    {
        return $this->_chambre;
    }



public function __toString()
{
    return $this->_client->getNom()." ".$this->_client->getPrenom();

}

}