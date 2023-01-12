<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>HOTEL-POO</title>
</head>
<body>



<?php
spl_autoload_register(function ($class_name) {

require_once $class_name . '.php';

});

$hotel1 = new Hotel ('Hilton', '10 route de la Gare', 'Strasbourg','****');
$hotel2 = new hotel ('Le Régent','61 Rue Dauphine','Paris','***');

$client1 = new Client('Virgile', 'GIBELLO');
$client2 = new Client('Micka', 'MURMANN');

$chambre1 = new Chambre($hotel1, 17, 120, 'Oui', 'Résérvée',3);
$chambre2 = new Chambre($hotel1, 3, 100, 'Non', 'Résérvée',2);
$chambre3 = new Chambre($hotel2, 4, 120, 'Non', 'Résérvée',2);
$chambre4 = new Chambre($hotel2, 5, 110, 'Oui', 'Résérvée',4);
$chambre5 = new Chambre($hotel1, 23, 130, 'Non', 'Résérvée',3);
$chambre6 = new Chambre($hotel1, 30, 140, 'Oui', 'Résérvée',1);
$chambre7 = new Chambre($hotel1, 41, 150, 'Non', 'Disponible',2);
$chambre8 = new Chambre($hotel1, 15, 160, 'Oui', 'Disponible',1);


$reservation1 = new Reservation($client1, $chambre1, '01-01-2021','03-01-2021');
$reservation2 = new Reservation($client2,$chambre2, '04-01-2021','06-01-2021');
$reservation3 = new Reservation($client1, $chambre3,  '08-04-2021','10-04-2021');
$reservation4 = new Reservation($client1,$chambre4, '11-04-2021','15-04-2021');
$reservation5 = new Reservation($client1, $chambre6,  '09-05-2021','16-05-2021');
$reservation6 = new Reservation($client1,$chambre5, '25-06-2021','26-06-2021');


/*AFFICHAGE INFO HOTEL*/
$hotel1->infoHotel();
echo "********************************"."<br>";

/*AFFICHAGE INFO HOTEL*/
$hotel2->infoHotel();
echo "********************************"."<br>";

/*AFFICHAGE RESERVATION HOTEL*/
$hotel1->afficherReservationHotel();
echo "********************************"."<br>";

/*echo "<h3>Réservations de ". $client1."</h3>";
echo "<span class='rectangle'> 2 Réservations</span><br>";
echo $hotel1." / ".$chambre1->infoChambre()."du ".$reservation1->getEntree()->format("d-m-y"). " "."au ".$reservation1->getSortie()->format("d-m-y"). "<br>";
echo $hotel2." / ".$chambre3->infoChambre()."du ".$reservation3->getEntree()->format("d-m-y"). " "."au ".$reservation3->getSortie()->format("d-m-y"). "<br>";
echo "********************************"."<br>";*/

/*AFFICHAGE RESERVATION CLIENT*/
$client1->afficherReservationClient();
echo "********************************"."<br>";

/*AFFICHAGE TABLEAU STATUT CHAMBRE*/
$hotel1->afficherStatutChambre();

//$reservation1->afficherReservation();
?>
</body>
</html>

