<?php

class Hotel
{
    private string $_nom;
    private string $_adresse;
    private string $_ville;
    private string $_etoiles;    
    private array $_reservations;
    private array $_chambres;


public function __construct(string $nom, string $adresse, string $ville, string $etoiles)
{
    $this->_nom = $nom;
    $this->_adresse = $adresse;
    $this->_ville = $ville;
    $this->_etoiles = $etoiles;    
    $this->_reservations = [];
    $this->_chambres = [];
}

public function addReservation( $reservation)
{
    $this->_reservations[] = $reservation;
}

public function getReservations()
{
    return $this->_reservations;
}

public function addChambre($chambre)
{
    $this->_chambres[] = $chambre;
}

public function getChambres()
{
    $this->_chambres [] = $chambre;
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



                                             /*Affichage info Hotel ET COORDONNEES*/
            

public function afficherHotel()
{
    echo "L'hotel"." ".$this->getNom()." ".$this->getEtoiles()." ".$this->getVille()."<br>". $this->getAdresse()." ".$this->getVille()."<br>";
}


public function __toString()
{
    return  $this->getNom()." ".$this->getEtoiles()." ".$this->getVille();
}

                                        /*AFFICHAGE INFO HOTEL ET CHAMBRE RESERVEES*/

public function infoHotel()
{
    echo   "L'hotel " . $this->getNom() . " ".$this->getEtoiles()." ".$this->getVille()."<br>". $this->getAdresse()." ".$this->getVille()."<br>";    
    echo  "Nombre de Chambres : ".(count($this->_chambres))."<br>";
    echo "chambres réservées : ".count($this->_reservations)."<br>";
    echo "Chambres libres : ".(count($this->_chambres) - count($this->_reservations))."<br>";
    
}

                                        /*AFFICHAGE DES RESERVATIOND D UN HOTEL*/
public function afficherReservationHotel()
{
    echo " Réservations de l'hotel ".$this."<br>"; 
    echo "<span class='rectangle'>".(count($this->_reservations))." Réservations</span><br>";       
    foreach( $this->_reservations as $reservation)
    {
       echo $reservation;
    }

}


 




}