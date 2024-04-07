<?php

include_once "Viaje.php";

$objViaje = new Viaje(
  123,
  "Neuquén",
  30,
  [
    "nombre" => "Fede",
    "apellido" => "Uñates",
    "DNI" => 12345678
  ]
);

// echo $objViaje;
echo "\n\n\n";
$objViaje->setCodigo(321);
$objViaje->setDestino("Rincón de los Sauces");
$objViaje->setCantMaxPasajeros(35);
print_r($objViaje->getPasajeros());

$objViaje->setPasajero(12345678, [
  "nombre" => "Federico",
  "apellido" => "Basanta",
  "DNI" => 12345678
], "modificar");
$objViaje->setPasajero(123458, [
  "nombre" => "Federico",
  "apellido" => "Basanta",
  "DNI" => 12345678
], "modificar");

$objViaje->setPasajero(23345612, [
  "nombre" => "Emanuel",
  "apellido" => "Ibañez",
  "DNI" => 23345612
], "crear");
$objViaje->setPasajero(23345612, [
  "nombre" => "Daniel",
  "apellido" => "Bravo",
  "DNI" => 23345612
], "crear");

echo $objViaje;
