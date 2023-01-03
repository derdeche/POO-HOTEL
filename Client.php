<?php

class Client
{
    private string $nom;
    private string $prenom;
    private array $reservations;
}

public function __construct(string $nom, string $prenom, array $reservations)
{
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->reservations = [];
}

public function getNom()
{
    return $this->nom;
}

public function getPrenom()
{
    return $this->prenom;
}

public function addReservations(array $reservation)
{
    $this->reservations[] = $reservation;
}

