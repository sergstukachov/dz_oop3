<?php

spl_autoload_register(function ($class) {
    include($_SERVER["DOCUMENT_ROOT"] . "/dz_oop3/" .
        str_replace("\\", "/", $class) . ".php");
});


$driver = new Driver('Vova', 'Ivanov');
$schoolBas = new Bus();
$driver->setTransport($schoolBas);
$driver->drive();

$cran = new Crane();
$driver->setTransport($cran);
$driver->drive();

$trolleyBus = new TrolleyBus();
$driver->setTransport($trolleyBus);
$driver->drive();

$truck = new Truck();
$driver->setTransport($truck);
$driver->drive();

$sportCar = new SportsCars();
$driver->setTransport($sportCar);
$driver->drive();


