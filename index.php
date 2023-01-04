

<?php
spl_autoload_register(function ($class_name) {

require_once $class_name . '.php';

});

$hotel1 = new Hotel ('Hilton', '10 route de la Gare', 'Strasbourg','****', 40, 10, 20);
$hotel2 = new hotel ('Le Régent','61 Rue Dauphine','Paris','***', 30, 10, 20);
$hotel1->afficherHotel();
echo "********************************"."<br>";



