<?php

class Reservation
{
    private Client $_client;    
    private Chambre $_chambre;
    private   $_entree;
    private   $_sortie;
    private float $_prix;
   


public function __construct(Client $client,Chambre $chambre, $entree, $sortie)
{
    $this->_client = $client;
    $this->_client->addReservation($this);
    $this->_entree = new DateTime ($entree);
    $this->_sortie = new dateTime ($sortie);
    $this->_chambre = $chambre;
    $this->_chambre->getHotel()->addReservation($this);
    $this->_prix = 0;
        
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
    return $this->_client->getNom()." ".$this->_client->getPrenom()."<br>".$this->_chambre." "." Du ".$this->getEntree()->format("d/m/y")." "."Au ".$this->getSortie()->format("d/m/y")."<br>";

}

public function afficherReservation()
{
    $resultat =  "Hotel : ".$this->_chambre->getHotel() ;
    $resultat .= "Chambre :".$this->_chambre->getNumChambre();    
    $resultat .= " du ".$this->getEntree()->format("d/m/Y")." au ".$this->getSortie()->format("d/m/Y")."<br>";
    echo $resultat;
}

}