<?php

include_once "Viaje.php";
include_once "../Pasajero/Pasajero.php";
include_once "../ResponsableV/ResponsableV.php";

// echo $objViaje;

$objPasajero = new Pasajero("Fede", "Uñates", 1234, 4321);

$objResponsable = new ResponsableV(2345, 5432, "Daniel", "Zabala");

$objViaje = new Viaje(123, "Neuquén", 3,  $objPasajero, $objResponsable);

$objViaje->agregarPasajero("Alejandra", "Gonzalez", 654, 234);
$objViaje->agregarPasajero("Alejandro", "Ibañez", 765, 234);
$objViaje->agregarPasajero("Nara", "Sanchez", 234, 234);
$objViaje->agregarPasajero("Nara", "Sanchez", 234, 234);
echo $objViaje;
