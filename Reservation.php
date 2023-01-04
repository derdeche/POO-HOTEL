<?php

class Reservation
{
    private Client $_client;
    private   $_entree;
    private   $_sortie;
    private Chambre $_chambre;
    private int $prix;


public function __construct(Client $client, $entree, $sortie, Chambre $chambre, int $prix)
{
    $this->_client = $client;
    //$this->_client->addReservation($this);
    $this->_entree = new DateTime ($entree);
    $this->_sortie = new dateTime ($sortie);
    $this->_chambre = $chambre;
    //$this->_chambre->addReservation($this);
    $this->_prix = $prix;
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

public function getPrix()
    {
        return $this->_prix;
    }

public function __toString()
{
    return $this->getClient();

}

}