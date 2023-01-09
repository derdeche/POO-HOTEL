

<?php
spl_autoload_register(function ($class_name) {

require_once $class_name . '.php';

});

$hotel1 = new Hotel ('Hilton', '10 route de la Gare', 'Strasbourg','****', 40, 10, 20);
$hotel2 = new hotel ('Le Régent','61 Rue Dauphine','Paris','***', 30, 10, 20);

$client1 = new Client('Virgile', 'GIBELLO');
$client2 = new Client('Micka', 'MURMANN');

$chambre1 = new Chambre($hotel1, 17, 120, 'Oui','Disponible',3);
$chambre2 = new Chambre($hotel1, 3, 100, 'Oui','Disponible',2);
$chambre3 = new Chambre($hotel2, 4, 100, 'Non', 'Réservée',2);

$reservation1 = new Reservation($client1, '01-01-2021','03-01-2021', $chambre1);
$reservation2 = new Reservation($client2, '04-01-2021','06-01-2021', $chambre2);
$reservation3 = new Reservation($client2, '08-04-2021','10-04-2021', $chambre3);

$hotel1->afficherHotel();
echo "********************************"."<br>";
$hotel2->afficherHotel();
echo "********************************"."<br>";
echo $chambre1;
echo "********************************"."<br>";
echo$chambre2;
echo "********************************"."<br>";
echo $chambre3;
echo "********************************"."<br>";
echo $reservation1;
echo "********************************"."<br>";
//$client1->afficherReservationClient();
//$hotel1->afficherReservationHotel();
//$reservation1->afficherReservationHotel();
//echo $client1;
//echo $client1;
