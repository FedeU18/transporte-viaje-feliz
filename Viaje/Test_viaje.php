<?php

include_once "Viaje.php";
include_once "../Pasajero/Pasajero.php";
include_once "../ResponsableV/ResponsableV.php";

function menu()
{
  echo "Menú: \n";
  echo "1- Agregar Pasajero\n";
  echo "2- Modificar Pasajero\n";
  echo "3- Mostrar Pasajeros\n";
  echo "4- Mostrar información de un pasajero\n";
  echo "5- Mostrar información de el responsable del viaje\n";
  echo "6- Salir\n";
  echo "Ingrese el número de la operación que desea realizar\n=>";
  return trim(fgets(STDIN));
}

echo "Ingrese un Destino: \n=>";
$destino = trim(fgets(STDIN));
echo "Ingrese una cantidad máxima de pasajeros: \n=>";
$cantMaxPasajeros = trim(fgets(STDIN));
echo "Ingrese el nombre de el responsable del viaje: \n=>";
$nombreResponsable = trim(fgets(STDIN));
echo "Ingrese el apellido de el responsable del viaje: \n=>";
$apellidoResponsable = trim(fgets(STDIN));
echo "Ingrese el número de empleado de el responsable del viaje: \n=>";
$nroEmpleadoResponsable = trim(fgets(STDIN));
echo "Ingrese el número de licencia de el responsable del viaje: \n=>";
$nroLicenciaResponsable = trim(fgets(STDIN));

$objResponsableV = new ResponsableV($nroEmpleadoResponsable, $nroLicenciaResponsable, $nombreResponsable, $apellidoResponsable);
$objViaje = new Viaje(1, $destino, $cantMaxPasajeros, $objResponsableV);



$salir = true;
do {
  $opcion = menu();
  switch ($opcion) {
    case 1:
      // opción 1: agregar pasajero
      echo "Ingrese nombre \n=>";
      $nombre = trim((fgets(STDIN)));
      echo "Ingrese apellido \n=>";
      $apellido = trim((fgets(STDIN)));
      echo "Ingrese documento \n=>";
      $documento = trim((fgets(STDIN)));
      echo "Ingrese telefono\n=>";
      $telefono = trim((fgets(STDIN)));

      $objViaje->agregarPasajero($nombre, $apellido, $documento, $telefono);
      break;
    case 2:
      // opción 2: modificar pasajero
      echo "Ingrese el DNI de el pasajero que desea modificar";
      $dniPasajero = trim(fgets(STDIN));
      $indicePasajero = $objViaje->encontrarPasajero($dniPasajero);
      if ($indicePasajero == -1) {
        echo "Pasajero no encontrado";
      } else {
        $modificado = true;
        do {
          echo "Qué desea modificar? \n";
          echo "1- Nombre\n";
          echo "2- Apellido\n";
          echo "3- Telefono\n";
          echo "4- Salir\n";
          $opcionModificar = trim(fgets(STDIN));
          switch ($opcionModificar) {
            case 1:
              echo "ingrese el nuevo nombre: \n";
              $nuevoNombre = trim(fgets(STDIN));
              $objViaje->getPasajeros()[$indicePasajero]->setNombre($nuevoNombre);
              break;
            case 2:
              echo "ingrese el nuevo apellido: \n";
              $nuevoApellido = trim(fgets(STDIN));
              $objViaje->getPasajeros()[$indicePasajero]->setNombre($nuevoApellido);
              break;
            case 3:
              echo "ingrese el nuevo telefono: \n";
              $nuevoTelefono = trim(fgets(STDIN));
              $objViaje->getPasajeros()[$indicePasajero]->setNombre($nuevoTelefono);
              break;
            case 4:
              # code...
              $modificado = !$modificado;
              break;

            default:
              # code...
              break;
          }
        } while ($modificado);
      }
      break;
    case 3:
      // opción 3: mostrar pasajeros
      $pasajeros = $objViaje->getPasajeros();
      for ($i = 0; $i < count($pasajeros); $i++) {
        echo $i + 1 . "- " .  $pasajeros[$i] . "\n";
      }
      break;
    case 4:
      // opción 4: mostrar info de un pasajero
      echo "Ingrese el DNI de el pasajero que desea ver\n";
      $dniPasajero = trim(fgets(STDIN));
      $indicePasajero = $objViaje->encontrarPasajero($dniPasajero);
      if ($indicePasajero == -1) {
        echo "Pasajero no encontrado\n";
      } else {
        echo $objViaje->getPasajeros()[$indicePasajero];
      }
      break;
    case 5:
      // opción 5: mostrar info del responsable del viaje
      echo $objViaje->getResponsableV();
      break;
    case 6:
      // opción 6: salir
      $salir = !$salir;
      break;
  }
} while ($salir);

echo "Gracias y chau chau";
