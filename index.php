

<?php
spl_autoload_register(function ($class_name) {

require_once $class_name . '.php';

});

$hotel1 = new Hotel ('Hilton', '10 route de la Gare', 'Strasbourg','****', 40, 10, 20);
$hotel2 = new hotel ('Le Régent','61 Rue Dauphine','Paris','***', 30, 10, 20);
$client1 = new Client('Virgile', 'GIBELLO');
$client2 = new Client('Micka', 'MURMANN');
$chambre1 = new Chambre($hotel1, 17, 120, 'Oui','Disponible');
$chambre2 = new Chambre($hotel2, 3, 100, 'Oui','Disponible');
$chambre3 = new Chambre($hotel2, 4, 100, 'Non', 'Réservée');
$reservation1 = new Reservation($client1, '2021-01-01','2021-01-03', $chambre1, 120);
//$reservation2 = new Reservation($client, '04-01-2021','06-01-2021', 3, 100);
//$reservation3 = new Reservation($client, '08-04-2021','10-04-2021', 4, 100);
$hotel1->afficherHotel();

echo "********************************"."<br>";
$hotel2->afficherHotel();

echo "********************************"."<br>";



